<?php

declare(strict_types=1);

use Mautic\CoreBundle\DependencyInjection\MauticCoreExtension;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return function (ContainerConfigurator $configurator): void {
    $services = $configurator->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
        ->public();

    $excludes = [
        'node_modules',
    ];

    $services->load('MauticPlugin\\GrapesJsCustomPluginBundle\\', '../')
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, $excludes)).'}');
    
    // Basic definitions with name, display name and icon
    $services->alias('mautic.integration.grapesjscustomplugin', MauticPlugin\GrapesJsCustomPluginBundle\Integration\GrapesJsCustomPluginIntegration::class);
    
    // Provides the form types to use for the configuration UI
    $services->alias('grapesjscustomplugin.integration.configuration', MauticPlugin\GrapesJsCustomPluginBundle\Integration\Support\ConfigSupport::class);
    
    // Tells Mautic what themes it should support when enabled
    $services->alias('grapesjscustomplugin.integration.builder', MauticPlugin\GrapesJsCustomPluginBundle\Integration\Support\BuilderSupport::class);
};
