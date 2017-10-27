<?php

namespace App;

use ScoutElastic\IndexConfigurator;
use ScoutElastic\Migratable;

class TutorialIndexConfigurator extends IndexConfigurator
{
    use Migratable;

    protected $settings = [
        //
    ];

    protected $defaultMapping = [
        //
    ];
}