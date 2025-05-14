<?php declare(strict_types=1);

namespace NeonlinesWebversteher\NeonlinesMinimalPlugin\Tests\Core;

use NeonlinesWebversteher\NeonlinesMinimalPlugin\Core\VersionChecker;
use PHPUnit\Framework\TestCase;

class VersionCheckerTest extends TestCase
{
    public function testIs64(): void
    {
        $checker = new VersionChecker(4);
        $this->assertTrue($checker->is64());
        $this->assertFalse($checker->is65());
        $this->assertFalse($checker->is66OrNewer());
    }

    public function testIs65(): void
    {
        $checker = new VersionChecker(5);
        $this->assertTrue($checker->is65());
        $this->assertFalse($checker->is64());
        $this->assertFalse($checker->is66OrNewer());
    }

    public function testIs66OrNewer(): void
    {
        $checker = new VersionChecker(6);
        $this->assertTrue($checker->is66OrNewer());
        $this->assertFalse($checker->is64());
        $this->assertFalse($checker->is65());
    }

    public function testIs67Future(): void
    {
        $checker = new VersionChecker(7);
        $this->assertTrue($checker->is66OrNewer());
    }
}
