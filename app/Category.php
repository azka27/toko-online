<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "custom_nama_table";
    protected $primaryKey = "identifier";
    protected $fillable = ["name", "email", "address"];
}