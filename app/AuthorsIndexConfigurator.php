<?php

namespace App;

use ScoutElastic\IndexConfigurator;
use ScoutElastic\Migratable;

class AuthorsIndexConfigurator extends IndexConfigurator
{
    use Migratable;

    /**
     * @var array
     */

    protected $name = 'authors';

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