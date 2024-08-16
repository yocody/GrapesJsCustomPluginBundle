<?php

declare(strict_types=1);

namespace MauticPlugin\GrapesJsCustomPluginBundle\Integration\Support;

use Mautic\IntegrationsBundle\Integration\Interfaces\BuilderInterface;
use MauticPlugin\GrapesJsCustomPluginBundle\Integration\GrapesJsCustomPluginIntegration;

class BuilderSupport extends GrapesJsCustomPluginIntegration implements BuilderInterface
{
    /**
     * @var string[]
     */
    private array $featuresSupported = ['email', 'page'];

    public function isSupported(string $featureName): bool
    {
        return in_array($featureName, $this->featuresSupported);
    }
}
