<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table='classes';

    public $primaryKey='id';

    public $timestamps=true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
