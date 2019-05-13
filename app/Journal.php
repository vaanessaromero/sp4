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

    protected $fillable = ['title', 'author', 'date','abstract', 'office','subject_txt', 'pdf_url', 'data'];

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
                'analyzer'=> 'my_analyzer',
                'search_analyzer'=> 'my_stop_analyzer', 
                'search_quote_analyzer' => 'my_analyzer',
                'fielddata' => true,
                'fields' => [
                    'raw' => [
                        'type' => 'text',
                    ]
                ]
            ],
            'author' => [
                'type' => 'text',
                'analyzer'=> 'my_analyzer',
                'search_analyzer'=> 'my_stop_analyzer', 
                'search_quote_analyzer' => 'my_analyzer',
                'fields' => [
                    'raw' => [
                        'type' => 'text'
                    ]
                ]
            ],
            'date' => [
                'type' => 'text',
                'fields' => [
                    'raw' => [
                        'type' => 'text'
                    ]
                ]
            ],
            'abstract' => [
                'type' => 'text',
                'term_vector' => 'with_positions_offsets_payloads',
                'store' => 'true',
                'analyzer'=> 'my_analyzer',
                'search_analyzer'=> 'my_stop_analyzer', 
                'search_quote_analyzer' => 'my_analyzer',
                'fields' => [
                    'raw' => [
                        'type' => 'text',
                    ]
                ],
            ],
            'office' => [
                'type' => 'text',
                'fields' => [
                    'raw' => [
                        'type' => 'text'
                    ]
                ]
            ],
            'subject_txt' => [
                'type' => 'text',
                'analyzer'=> 'my_analyzer',
                'search_analyzer'=> 'my_stop_analyzer', 
                'search_quote_analyzer' => 'my_analyzer',
                'fields' => [
                    'raw' => [
                        'type' => 'text'
                    ]
                ]
            ],
            'pdf_url' => [
                'type' => 'text',
                'fields' => [
                    'raw' => [
                        'type' => 'text'
                    ]
                ]
            ],
            'data' => [
                'type' => 'text',
                'term_vector' => 'with_positions_offsets_payloads',
                'store' => 'true',
                'analyzer'=> 'my_analyzer',
                'search_analyzer'=> 'my_stop_analyzer', 
                'search_quote_analyzer' => 'my_analyzer',
                'fields' => [
                    'raw' => [
                        'type' => 'text',
                    ],
                ],
            ],
        ]
    ];

    protected $casts = [
        'author_id' => 'array',
    ];

    public function upload()
    {
        return $this->hasOne('App\Upload');
    }
    // public function author()
    // {
    //     return $this->belongsToMany('App\Author');
    // }
    public function subject()
    {
        return $this->belongsToMany('App\Subject');
    }
    // public function subjects(){
    //     return $this->belongsToMany( 'App\Subject', 'journal_subject', 'journal_id', 'subject_id' );
    // }
}


