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

    public function inventoryItems()
    {
        return $this->hasMany(InventoryItemsModel::class,"detail_id");
    }


    protected static function booted()
    {
        static::addGlobalScope('relation', function (Builder $builder) {
            $builder->with("inventoryItems");
        });
    }
}
