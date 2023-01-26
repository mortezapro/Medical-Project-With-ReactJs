<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class PriceFilter{
    public function filter(Builder $builder, $value) :Builder
    {
         return $builder->join("product_details","product_details.product_id","=","products.id")
            ->join("inventory_items","inventory_items.detail_id","=","product_details.id")
            ->join("currencies","currencies.id","=","inventory_items.currency_id")
            ->whereBetween(DB::raw("inventory_items.price * currencies.value"),[$value["min"],$value["max"]]);
    }
}
