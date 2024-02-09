<?php

namespace Larapress\PayamGostar\Services\PayamGostar;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int                  $id
 * @property string               $link_type
 * @property string               $link_tag
 * @property int                  $link_id
 * @property array                $data
 * @property \Carbon\Carbon       $created_at
 * @property \Carbon\Carbon       $updated_at
 */
class PgSyncRecord extends Model
{

    const LinkType_UserSync = 'user';
    const LinkType_ProductSync = 'product';
    const LinkType_CartSync = 'cart';

    protected $table = 'pg_records';

    protected $fillable = [
        'id', // fill from data
        'link_id',
        'link_type',
        'link_tag',
        'data',
    ];
    
    public $casts = [
        'data' => 'array',
    ];


    public function link()
    {
        return $this->morphTo();
    }

    /**
     * Undocumented function
     *
     * @return Relation
     */
    public function link_user()
    {
        return $this->link()
            ->constrain([
                'product' => function ($query) {
                }
            ]);
    }
}