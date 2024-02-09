<?php

namespace Larapress\PayamGostar\Commands;

use Illuminate\Support\Facades\Log;
use Larapress\CRUD\Commands\ActionCommandBase;
use Larapress\ECommerce\Models\Cart;
use Larapress\ECommerce\Models\Product;
use Larapress\PayamGostar\Services\PayamGostar\IPayamGostarService;
use Larapress\PayamGostar\Services\PayamGostar\PgSyncRecord;
use Larapress\Profiles\Models\FormEntry;
use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;

/**
 * This class is used for migrating from old version of pg-syncing to
 * new version with a dedicated database table
 */
class PgSyncRecordsImportCommands extends ActionCommandBase
{
    /** @var IPayamGostarService */
    protected $pg;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larapress:pg-import {--action=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync larapress users with payamgostar';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(IPayamGostarService $pg)
    {
        parent::__construct([
            'import:users' => $this->importSyncedUsers(),
            'import:products' => $this->importSyncedProducts(),
            'import:carts' => $this->importSyncedCarts(),
        ]);
        $this->pg = $pg;
    }

    /**
     * 
     */
    public function importSyncedUsers()
    {
        return function () {
            $count = FormEntry::where('form_id', config('larapress.ecommerce.lms.profile_form_id'))
                ->count();
            
            $this->output->progressStart($count);
            FormEntry::where('form_id', config('larapress.ecommerce.lms.profile_form_id'))
                ->chunk(1000, function ($entries) {
                    foreach ($entries as $entry) {
                        if (isset($entry->data['cache']['payamgostar']['crmId'])) {
                            PgSyncRecord::updateOrCreate([
                                'link_id' => $entry->user_id,
                                'link_type' => PgSyncRecord::LinkType_UserSync,
                            ], [
                                'data' => [
                                    'crmId' => $entry->data['cache']['payamgostar']['crmId']
                                ]
                            ]);
                        }
                        $this->output->progressAdvance(1);
                    }
                });
            $this->output->progressFinish();
            $this->info("Done.");
        };
    }


    /**
     * 
     */
    public function importSyncedProducts()
    {
        return function () {
            $query = Product::query()
            ->whereHas('types', function ($q) {
                $q->whereIn('id', config('larapress.payamgostar.sync.allowed_product_types'));
            });
            
            $this->output->progressStart($query->count());
            $query->chunk(1000, function ($products) {
                    foreach ($products as $product) {
                        if (isset($product->data['payamgostar']['crmId'])) {
                            PgSyncRecord::updateOrCreate([
                                'link_id' => $product->id,
                                'link_type' => PgSyncRecord::LinkType_ProductSync,
                            ], [
                                'data' => [
                                    'crmId' => $product->data['payamgostar']['crmId']
                                ]
                            ]);
                        }
                        $this->output->progressAdvance(1);
                    }
                });
            $this->output->progressFinish();
            $this->info("Done.");
        };
    }


    /**
     * 
     */
    public function importSyncedCarts()
    {
        return function () {
            $query = Cart::query()->where('status', Cart::STATUS_ACCESS_COMPLETE);
            
            $this->output->progressStart($query->count());
            $query->chunk(1000, function ($carts) {
                    foreach ($carts as $cart) {
                        if (isset($cart->data['cache']['payamgostar']['crmId'])) {
                            PgSyncRecord::updateOrCreate([
                                'link_id' => $cart->id,
                                'link_type' => PgSyncRecord::LinkType_CartSync,
                            ], [
                                'data' => [
                                    'crmId' => $cart->data['cache']['payamgostar']['crmId']
                                ]
                            ]);
                        }
                        $this->output->progressAdvance(1);
                    }
                });
            $this->output->progressFinish();
            $this->info("Done.");
        };
    }
}
