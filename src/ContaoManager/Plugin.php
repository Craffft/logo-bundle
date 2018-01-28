<?php

declare(strict_types=1);

namespace Craffft\LogoBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Craffft\LogoBundle\CraffftLogoBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(CraffftLogoBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['logo']),
        ];
    }
}
