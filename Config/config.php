<?php

return [
    'name' => 'GrapesJS Custom Plugin',
    'description' => 'Test bundle to add a custom GrapesJS plugin to the Mautic Builder',
    'version' => '1.0.0',
    'author' => 'Leuchtfeuer',
    'routes' => [],
    'services' => [
        'other' => [],
        'events' => [],
        'forms' => [],
        'models' => [],
        'fixtures' => [],
        'integrations' => [
            'mautic.integration.grapesjscustomplugin' => [
                'class' => \MauticPlugin\GrapesJsCustomPluginBundle\Integration\GrapesJsCustomPluginIntegration::class,
                'tags' => [
                    'mautic.integration',
                    'mautic.basic_integration',
                ],
            ],
            'grapesjscustomplugin.integration.configuration' => [
                'class' => \MauticPlugin\GrapesJsCustomPluginBundle\Integration\Support\ConfigSupport::class,
                'tags' => [
                    'mautic.config_integration',
                ],
            ],
        ],
    ],
];