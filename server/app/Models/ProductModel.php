<?php

namespace App\Models;

use App\Filters\Base\BaseFilter;
use App\Traits\Categorizable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProductModel extends Model
{
    use HasFactory,Categorizable;
    protected $table = "products";
    protected $primaryKey='id';
    protected $fillable = [
        "title","slug","brand_id","summary","content","thumbnail","indexable","canonical","seo_title",
        "seo_description","seo_image","schema"
    ];

    protected $appends=["price"];

    public function getPriceAttribute()
    {
        return $this->details[0]->inventoryItems->price * $this->details[0]->inventoryItems->currency->value;
    }
    public function details() :HasMany
    {
        return $this->hasMany(ProductDetailModel::class,"product_id");
    }

    public function brand() :HasOne
    {
        return $this->hasOne(BrandModel::class,"id");
    }

    public function scopeCanFilter(Builder $builder, $filters){
        return (new BaseFilter($filters))->filter($builder);
    }

    protected static function booted()
    {
        static::addGlobalScope('relation', function (Builder $builder) {
            $builder->with("details.values.key")->with("details.inventoryItems")
                ->with("details.inventoryItems.inventory")
                ->with("details.inventoryItems.currency")
                ->with("brand")->with("categories");
        });
    }
}
