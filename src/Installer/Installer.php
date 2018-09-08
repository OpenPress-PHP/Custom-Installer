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
        $type = substr($this->getName(), 0, strlen($this->getName()) - 1);
        return "openpress-{$type}" === $packageType;
    }

    abstract protected function getName();
}
