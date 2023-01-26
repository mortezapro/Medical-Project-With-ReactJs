<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorizables extends Model
{
    use HasFactory;

    protected $table = "categorizables";
    protected $primaryKey = ['categorizable_id', 'category_model_id',"categorizable_type"];
    protected $fillable = ['categorizable_id', 'category_model_id',"categorizable_type"];
}
