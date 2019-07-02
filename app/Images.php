<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $guarded= [];
    protected $appends= ['type_name'];
    protected $primaryKey = 'id_image';


    public function type(){

      return $this->belongsTo(Type::class, 'id_type');
    }

}
