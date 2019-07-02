<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $guarded =[];
  protected $appends = ['cat_name'];
  protected $primaryKey = 'id_category';

  public function getNameAttribute()
  {
    return ucfirst( $this->attributes['cat_name']);
  }


}
