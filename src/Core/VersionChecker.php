<?php

declare(strict_types=1);

namespace Webversteher\NeonlinesMinimalPlugin\Core;

use Shopware\Core\Framework\Feature;

class VersionChecker
{
    private ?int $minorVersionOverride;

    public function __construct(?int $minorVersionOverride = null)
    {
        $this->minorVersionOverride = $minorVersionOverride;
    }

    public function getMinorVersion(): int
    {
        return $this->minorVersionOverride ?? Feature::getMinorVersion();
    }

    public function is64(): bool
    {
        return $this->getMinorVersion() === 4;
    }

    public function is65(): bool
    {
        return $this->getMinorVersion() === 5;
    }

    public function is66OrNewer(): bool
    {
        return $this->getMinorVersion() >= 6;
    }
}
