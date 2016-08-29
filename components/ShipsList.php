<?php

namespace JumpLink\Ships\Components;

use Cms\Classes\ComponentBase;

use JumpLink\Ships\Models\Ship as Ship;

class ShipsList extends ComponentBase
{
	public $ships;

	public function componentDetails()
	{
		return [
			'name' => 'Ships List',
			'description' => 'lists all ships in the fleet'
		];
	}

	public function defineProperties()
	{
		return [];
	}

	public function onRun()
	{
		$this->ships = Ship::all();
		$this->page['ships'] = $this->ships;
	}

}
