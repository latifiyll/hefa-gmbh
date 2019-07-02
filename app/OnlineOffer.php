<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineOffer extends Model
{
    protected $guarded= [];
    protected $primaryKey = 'id_offer';


    public function message_onoffers()
    {
      return $this->hasMany(MessageOnoffer::class, 'id_offer');
    }
    public function type(){
      return  $this->belongsTo(Type::class,'id_type');
    }
    public function getTypeNameAttribute()
    {
        return $this->type->type_name;
    }

}
