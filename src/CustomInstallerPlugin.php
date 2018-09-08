<?php
namespace OpenPress\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class CustomInstallerPlugin implements PluginInterface
{
    public function active(Composer $composer, IOInterface $io)
    {
        $pluginInstaller = new PluginInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);

        $themeInstaller = new ThemeInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
