<?php

declare(strict_types=1);

namespace MauticPlugin\GrapesJsCustomPluginBundle\Integration\Support;

use Mautic\IntegrationsBundle\Integration\DefaultConfigFormTrait;
use Mautic\IntegrationsBundle\Integration\Interfaces\ConfigFormInterface;
use MauticPlugin\GrapesJsCustomPluginBundle\Integration\GrapesJsCustomPluginIntegration;

class ConfigSupport extends GrapesJsCustomPluginIntegration implements ConfigFormInterface
{
    use DefaultConfigFormTrait;
}
