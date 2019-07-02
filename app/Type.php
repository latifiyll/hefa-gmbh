<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guarded =[];
    protected $appends = ['cat_name'];
    protected $primaryKey = 'id_type';
    public function getNameAttribute(){

      return ucfirst($this->attributes['type_name']);
    }

    public function category(){
      return $this->belongsTo(Category::class,'id_category');
    }
    public function getCategoryNameAttribute(){
      return $this->category->cat_name;
    }
}
