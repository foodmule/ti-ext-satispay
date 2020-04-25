<?php namespace Binco\SatisPay;

use System\Classes\BaseExtension;

class Extension extends BaseExtension
{
    public function registerPaymentGateways()
    {
        return [
            'Binco\SatisPay\Payments\SatisPay' => [
                'code' => 'satispay',
                'name' => 'Satispay',
                'description' => 'Satispay',
            ],
        ];
    }
}
