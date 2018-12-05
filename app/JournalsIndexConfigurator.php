<?php

namespace App;

use ScoutElastic\IndexConfigurator;
use ScoutElastic\Migratable;

class JournalsIndexConfigurator extends IndexConfigurator
{
    use Migratable;

    /**
     * @var array
     */

    protected $name = 'journals';

    protected $settings = [
        //
        'analysis' => [
            'analyzer' => [
                'es_std' => [
                    'type' => 'standard',
                ]
            ]    
        ]
    ];
}