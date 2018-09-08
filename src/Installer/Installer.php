<?php
namespace OpenPress\Composer\Installer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getInstallPath(PackageInterface $package)
    {
        return "app/{$this->name}/{$package->getPrettyName()}";
    }

    public function supports($packageType)
    {
        return "openpress-{$this->name}" === $packageType;
    }
}
