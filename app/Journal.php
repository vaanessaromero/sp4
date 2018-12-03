<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use Searchable;

    /**
     * @var string
     */
    protected $indexConfigurator = MyIndexConfigurator::class;

    /**
     * @var array
     */
    protected $searchRules = [
        //
        // MySearchRule::class
    ];

    /**
     * @var array
     */
    protected $mapping = [
        //
        'properties' => [
            'suggest' => [
                'type' => 'completion',
            ],
            'title' => [
                'type' => 'text',
                'fields' => [
                    'raw' => [
                        'type' => 'text',
                    ]
                ]
            ],
            'author' => [
                'type' => 'text',
                'fields' => [
                    'raw' => [
                        'type' => 'text',
                    ]
                ]
            ],
            'date' => [
                'type' => 'text',
                'fields' => [
                    'raw' => [
                        'type' => 'date',
                    ]
                ]
            ],
            'abstract' => [
                'type' => 'text',
                'fields' => [
                    'raw' => [
                        'type' => 'text',
                    ]
                ]
            ],
            'branch' => [
                'type' => 'text',
                'fields' => [
                    'raw' => [
                        'type' => 'text',
                    ]
                ]
            ],
        ]
    ];
}