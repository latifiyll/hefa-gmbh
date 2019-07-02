<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageDetail extends Model
{
  protected $guarded =[];
  protected $appends = ['category_name'];
  protected $primaryKey = 'id_page';


  public function items(){

    return $this->hasMany(PostItem::class);
  }


  public function category()
  {
    return $this->belongsTo(Category::class, 'id_category');
  }

  public function type()
  {
    return $this->belongsTo(Type::class);
  }


}
