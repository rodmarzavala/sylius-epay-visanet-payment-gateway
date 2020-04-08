<?php

declare(strict_types=1);

namespace Acme\SyliusExamplePlugin\Payum;

use Payum\Core\GatewayFactory;
use Payum\Core\Bridge\Spl\ArrayObject;
use Acme\SyliusExamplePlugin\Payum\Action\StatusAction;

final class SyliusPaymentGatewayFactory extends GatewayFactory
{
    protected function populateConfig(ArrayObject $config): void
    {
        $config->defaults([
            'payum.factory_name' => 'sylius_payment',
            'payum.factory_title' => 'Sylius Payment',
            'payum.action.status' => new StatusAction(),
        ]);

        $config['payum.api'] = function (ArrayObject $config) {
            return new SyliusApi($config['api_key']);
        };
    }
}
