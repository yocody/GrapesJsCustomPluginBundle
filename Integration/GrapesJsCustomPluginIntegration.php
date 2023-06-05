<?php

declare(strict_types=1);

namespace MauticPlugin\GrapesJsCustomPluginBundle\Integration;

use Mautic\IntegrationsBundle\Integration\BasicIntegration;
use Mautic\IntegrationsBundle\Integration\ConfigurationTrait;
use Mautic\IntegrationsBundle\Integration\Interfaces\BasicInterface;

class GrapesJsCustomPluginIntegration extends BasicIntegration implements BasicInterface
{
    use ConfigurationTrait;

    public const NAME         = 'grapesjscustomplugin';
    public const DISPLAY_NAME = 'GrapesJS Custom-Plugin';

    public function getName(): string
    {
        return self::NAME;
    }

    public function getDisplayName(): string
    {
        return self::DISPLAY_NAME;
    }

    public function getIcon(): string
    {
        return 'plugins/GrapesJsCustomPluginBundle/Assets/img/icon.png';
    }
}
