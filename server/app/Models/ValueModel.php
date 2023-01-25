<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValueModel extends Model
{
    use HasFactory;
    protected $table = "values";
    protected $primaryKey='id';
    protected $fillable = [
        "key_id","name"
    ];
}
