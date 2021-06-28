<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class biaya extends Model
{
    protected $table     = 'biaya';
    protected $fillable  = ['id_biaya','jenis','biaya'];
    protected $primarykey = 'id_biaya';
    public $timestamps   = false;

}
