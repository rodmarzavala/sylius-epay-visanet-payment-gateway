<?php

declare(strict_types=1);

namespace RLabs\SyliusEpayVisanetPaymentGateway\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('rlabs_sylius_epay_visanet_payment_gateway');
        if (\method_exists($treeBuilder, 'getRootNode')) {
            $rootNode = $treeBuilder->getRootNode();
        } else {
            // BC layer for symfony/config 4.1 and older
            $rootNode = $treeBuilder->root('rlabs_sylius_epay_visanet_payment_gateway');
        }

        return $treeBuilder;
    }
}
