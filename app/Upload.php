<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    //
    public $fillable = ['pdf_name', 'pdf_url'];

    public function journal()
    {
        return $this->belongsTo('App\Journal');
    }
}
