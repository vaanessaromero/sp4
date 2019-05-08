<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journals extends Model
{
    //
    public $fillable = ['title', 'author', 'date','abstract', 'office', 'subject_txt', 'pdf_url'];
}
