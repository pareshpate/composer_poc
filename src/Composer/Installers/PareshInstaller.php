<?php
namespace Composer\Installers;

class PareshInstaller extends BaseInstaller
{
    protected $locations = array(
        'common-module'       => 'modules/common/{$name}/',
    );
}
