<?php
namespace OpenPress\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use OpenPress\Composer\Installer\ThemeInstaller;
use OpenPress\Composer\Installer\PluginInstaller;

class CustomInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $pluginInstaller = new PluginInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);

        $themeInstaller = new ThemeInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
