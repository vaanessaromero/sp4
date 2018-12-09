<?php

namespace App;

use ScoutElastic\IndexConfigurator;
use ScoutElastic\Migratable;

class SubjectsIndexConfigurator extends IndexConfigurator
{
    use Migratable;

    /**
     * @var array
     */
    protected $name = 'subjects';

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