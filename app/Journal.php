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
            'author_id' => [
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
                        'type' => 'keyword'
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
            'subject_id' => [
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

    protected $casts = [
        'subject_field' => 'array',
        'author' => 'array',
    ];

    public function upload()
    {
        return $this->hasOne('App\Upload');
    }
    public function author()
    {
        return $this->belongsToMany('App\Author');
    }
    public function subject()
    {
        return $this->belongsToMany('App\Subject');
    }
}


