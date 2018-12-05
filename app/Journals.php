<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journals extends Model
{
    //
    public $fillable = ['title', 'author', 'date','abstract', 'office', 'pdf_url'];
}
