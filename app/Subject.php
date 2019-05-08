<?php

namespace App;

use ScoutElastic\Searchable;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use Searchable;

    public $fillable = ['field'];
    /**
     * @var string
     */
    protected $indexConfigurator = SubjectsIndexConfigurator::class;

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
            'field' => [
                'type' => 'text',
                'fields' => [
                    'raw' => [
                        'type' => 'keyword'
                    ]
                ]
            ]
        ]
    ];

    public function journal()
    {
        return $this->belongsToMany('App\Journal');
        // return $this->belongsToMany( 'App\Journal', 'journal_subject', 'subject_id', 'journal_id' );
    }
}