<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetailModel extends Model
{
    use HasFactory;
    protected $table = "product_details";
    protected $primaryKey='id';
    protected $fillable = [
        "product_id","value_id"
    ];

    protected $appends = ["exist","real_price"];

    public function getExistAttribute()
    {
        if($this->inventoryItems->quantity > 0){
            return true;
        }
        return false;
    }

    public function getRealPriceAttribute()
    {
        return $this->inventoryItems->price * $this->inventoryItems->currency->value;
    }

    public function inventoryItems()
    {
        return $this->hasOne(InventoryItemsModel::class,"detail_id");
    }

    public function values()
    {
        return $this->belongsTo(ValueModel::class,"value_id");
    }
    public function product()
    {
        return $this->belongsTo(ProductModel::class,"product_id");
    }

    protected static function booted()
    {
        static::addGlobalScope('relation', function (Builder $builder) {
            $builder->with("inventoryItems");
        });
    }
}
