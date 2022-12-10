<?php

namespace App\Models;

use App\Traits\Categorizable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory,Categorizable;
    protected $table = "posts";
    protected $primaryKey='id';
    protected $fillable = [
        "title","slug","description","seo_title","seo_description","seo_image","content","status","user_id","indexable","highlight","canonical","thumbnail"
    ];
    protected $casts = [
        'indexable' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,"user_id");
    }
    protected static function booted()
    {
        static::addGlobalScope('relation', function (Builder $builder) {
            $builder->with("user")->with("categories")->orderBy("id","desc");
        });
    }
    public function setContentAttribute($value)
    {
        $this->attributes["content"] = htmlspecialchars($value);
    }

    public function getContentAttribute($value)
    {
        return html_entity_decode($value);
    }
    public function getStatusAttribute($value)
    {
        if($value == config("post-status.initialRegistration")){
            return "initialRegistration";
        } else if($value == config("post-status.disabled")){
            return "disabled";
        } else if($value == config("post-status.published")) {
            return "published";
        }
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
