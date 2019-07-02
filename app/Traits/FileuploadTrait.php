<?php
namespace App\Traits;
trait FileUploadTrait {

  public function uploadImage($image) {

    if ($image) {

      $image_name = $image->store('public/images');
      $name = explode("/", $image_name);
      $img_name = $name[count($name) - 1];
      return $img_name;
    }
    return null;
  }
  public function uploadHeaderImage($header_img) {

    if ($header_img) {

      $image_name = $header_img->store('public/headerImages');
      $name = explode("/", $image_name);
      $himg_name = $name[count($name) - 1];
      return $himg_name;
    }
    return null;
  }
  public function uploadImages($image_name) {

    if ($image_name) {

      $image_name = $image_name->store('public/images_name');
      $name = explode("/", $image_name);
      $himg_name = $name[count($name) - 1];
      return $himg_name;
    }
    return null;
  }
  public function uploadCategoryImg($image) {

    if ($image) {

      $image = $image->store('public/categories');
      $name = explode("/", $image);
      $himg_name = $name[count($name) - 1];
      return $himg_name;
    }
    return null;
  }
}
