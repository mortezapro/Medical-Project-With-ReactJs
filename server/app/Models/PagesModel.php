<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagesModel extends Model
{
    use HasFactory;
    protected $table = "pages";
    protected $primaryKey = "id";
    protected $fillable = [
        "title","slug","content","indexable","layout_id","canonical","seo_title","seo_description","seo_image"
    ];

    protected $casts = [
        'indexable' => 'boolean',
    ];

    public function getContentAttribute($value)
    {
        return html_entity_decode($value);
    }

    public function getIsIndexableAttribute($value):string
    {
        if($value){
            return "yes";
        } else {
            return "no";
        }
    }
}
