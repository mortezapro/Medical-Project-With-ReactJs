<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandModel extends Model
{
    use HasFactory;
    protected $table = "brands";
    protected $primaryKey='id';
    protected $fillable = [
        "name","slug","indexable","canonical","seo_title","seo_description","seo_image","schema"
    ];
}
