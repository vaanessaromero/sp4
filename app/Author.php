<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use Searchable;

    /**
     * @var string
     */
    protected $indexConfigurator = AuthorsIndexConfigurator::class;

    /**
     * @var array
     */
    protected $searchRules = [
        //
    ];

    /**
     * @var array
     */
    protected $mapping = [
        //
        'properties' => [
            'id' => [
                'type' => 'integer',
                'fields' => [
                    'raw' => [
                        'type' => 'integer',
                    ]
                ]
            ],
            'first_name' => [
                'type' => 'text',
                'fields' => [
                    'raw' => [
                        'type' => 'text'
                    ]
                ]
            ],
            'last_name' => [
                'type' => 'text',
                'fields' => [
                    'raw' => [
                        'type' => 'text'
                    ]
                ]
            ]
        ]
    ];

    public function journal()
    {
        return $this->belongsToMany('App\Journal');
    }
}