<?php

namespace App\Models;

use App\Filters\Base\BaseFilter;
use App\Traits\Categorizable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductModel extends Model
{
    use HasFactory,Categorizable;
    protected $table = "products";
    protected $primaryKey='id';
    protected $fillable = [
        "title","slug","brand_id","summary","content","thumbnail","indexable","canonical","seo_title",
        "seo_description","seo_image","schema"
    ];

    protected $appends=["price","arrayPrice"];

    public function getArrayPriceAttribute()
    {
//        return $this->details[0]->inventoryItems[0]->price * $this->details[0]->inventoryItems[0]->currency->value;
        $price = [];
        foreach ($this->details as $detail) {
            foreach ($detail->inventoryItems as $inventoryItem){
                $price[] = $inventoryItem->price * $inventoryItem->currency->value;
            }
        }
        return $price;
    }
    public function getPriceAttribute()
    {
        return $this->details[0]->inventoryItems[0]->price * $this->details[0]->inventoryItems[0]->currency->value;
    }
    public function details() :HasMany
    {
        return $this->hasMany(ProductDetailModel::class,"product_id");
    }

    public function brand() :BelongsTo
    {
        return $this->belongsTo(BrandModel::class,"brand_id");
    }

    public function scopeCanFilter(Builder $builder, $filters){
        return (new BaseFilter($filters))->filter($builder);
    }

    protected static function booted()
    {
        static::addGlobalScope('relation', function (Builder $builder) {
            $builder->with("details")->with("brand")->with("categories");
        });
    }
}
