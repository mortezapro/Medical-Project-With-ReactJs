<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorModel extends Model
{
    use HasFactory;
    protected $table = "doctors";
    protected $primaryKey='id';
    protected $fillable = [
        "full_name","username","expert","avatar","online_counseling","office_address"
    ];
}
