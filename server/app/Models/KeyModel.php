<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeyModel extends Model
{
    use HasFactory;
    protected $table = "keys";
    protected $primaryKey='id';
    protected $fillable = [
        "name","priority","filterable","category_id"
    ];

    public function values()
    {
        return $this->hasMany(ValueModel::class,"key_id");
    }
}
