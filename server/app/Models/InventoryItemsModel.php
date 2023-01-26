<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryItemsModel extends Model
{
    use HasFactory;
    protected $table = "inventory_items";
    protected $primaryKey='id';
    protected $fillable = [
        "detail_id","price","quantity","currency_id","inventory_id"
    ];

    public function inventory()
    {
        return $this->belongsTo(InventoryModel::class,"inventory_id ");
    }
    public function currency()
    {
        return $this->belongsTo(CurrencyModel::class,"currency_id");
    }
    protected static function booted()
    {
        static::addGlobalScope('relation', function (Builder $builder) {
            $builder->with("currency");
        });
    }
}
