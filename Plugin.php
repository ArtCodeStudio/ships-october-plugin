<?php namespace JumpLink\Ships;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
	return [
		'JumpLink\Ships\Components\ShipsList' => 'ShipsList'
	];
    }

    public function registerSettings()
    {
    }
}
