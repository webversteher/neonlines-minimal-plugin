<?php declare(strict_types=1);

namespace Webversteher\NeonlinesMinimalPlugin;

use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\ActivateContext;
use Webversteher\NeonlinesMinimalPlugin\Core\VersionChecker;

class NeonlinesMinimalPlugin extends Plugin
{
    public function activate(ActivateContext $activateContext): void
    {
        parent::activate($activateContext);

        $versionChecker = new VersionChecker();

        if ($versionChecker->is64()) {
            // Code für Shopware 6.4
            // Kommentar für Bump
        }

        if ($versionChecker->is65()) {
            // Code für Shopware 6.5
        }

        if ($versionChecker->is66OrNewer()) {
            // Code für Shopware 6.6+
        }
    }
}
