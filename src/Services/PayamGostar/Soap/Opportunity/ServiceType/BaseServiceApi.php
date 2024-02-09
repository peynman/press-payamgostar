<?php

declare(strict_types=1);

namespace Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class BaseServiceApi extends AbstractSoapClientBase {
    protected $wsdlRelativePath = '/Services/API/IOpportunity_1.wsdl';
    protected $wsdlHostRelativePath = '/Services/API/IOpportunity.svc?wsdl';

    public function __construct(array $wsdlOptions = [])
    {
        if (config('larapress.payamgostar.use_local_wsdl')) {
            $wsdlOverride = [
                AbstractSoapClientBase::WSDL_URL => $wsdlOptions[AbstractSoapClientBase::WSDL_URL].$this->wsdlRelativePath,
            ];
        } else {
            $wsdlOverride = [
                AbstractSoapClientBase::WSDL_URL => $wsdlOptions[AbstractSoapClientBase::WSDL_URL].$this->wsdlHostRelativePath,
            ];
        }
        $wsdlOverride[AbstractSoapClientBase::WSDL_CLASSMAP] = \Larapress\PayamGostar\Services\PayamGostar\Soap\Opportunity\ClassMap::get();
        parent::__construct(array_merge($wsdlOptions, $wsdlOverride));
    }

}