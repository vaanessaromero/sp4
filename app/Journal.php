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
    protected $indexConfigurator = JournalsIndexConfigurator::class;

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
    // protected $type = 'my_journal';
    
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
            'title' => [
                'type' => 'text',
                'fields' => [
                    'raw' => [
                        'type' => 'keyword'
                    ]
                ]
            ],
            'author' => [
                'type' => 'text',
                'fields' => [
                    'raw' => [
                        'type' => 'keyword'
                    ]
                ]
            ],
            'date' => [
                'type' => 'text',
                'fields' => [
                    'raw' => [
                        'type' => 'date'
                    ]
                ]
            ],
            'abstract' => [
                'type' => 'text',
                'fields' => [
                    'raw' => [
                        'type' => 'keyword'
                    ]
                ]
            ],
            'office' => [
                'type' => 'text',
                'fields' => [
                    'raw' => [
                        'type' => 'keyword'
                    ]
                ]
            ],
            'subject_field' => [
                'type' => 'text',
                'fields' => [
                    'raw' => [
                        'type' => 'keyword'
                    ]
                ]
            ],
            'pdf_url' => [
                'type' => 'text',
                'fields' => [
                    'raw' => [
                        'type' => 'keyword'
                    ]
                ]
            ],
        ]
    ];

    public function upload()
    {
        return $this->hasOne('App\Upload');
    }
}

