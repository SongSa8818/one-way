<?php

namespace App;


class DeleteImage
{
  public function deleteImage($filepath, $fileName)
  {
    $old_image = $filepath.$fileName;
    if (file_exists($old_image)) {
      @unlink($old_image);
    }
    return;
  }
}