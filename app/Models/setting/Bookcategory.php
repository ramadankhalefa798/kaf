<?php

namespace App\Models\setting;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class Bookcategory extends Model implements TranslatableContract
{
    //
    use Translatable;
    protected $table='bookcategories';
    public $translatedAttributes = ['name'];
    protected $guarded=[];
}
