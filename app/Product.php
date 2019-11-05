<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    $product_baru = new Product;
    $product_baru->name = "Sepatu Coder";
    $product_baru->description = "Deskripsi Sepatu Baru";
    $product_baru->save();
}
