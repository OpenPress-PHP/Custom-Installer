<?php
namespace OpenPress\Composer\Installer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

abstract class Installer extends LibraryInstaller
{
    public function getInstallPath(PackageInterface $package)
    {
        return "app/{$this->getName()}/{$package->getPrettyName()}";
    }

    public function supports($packageType)
    {
        return "openpress-{$this->getName()}" === $packageType;
    }

    abstract protected function getName();
}
