<?php

namespace App\Models\setting;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class Semester extends Model implements TranslatableContract
{
    //
    use Translatable;
    public $translatedAttributes = ['name'];
    protected $table='semesters';
    protected $guarded=[];
}
