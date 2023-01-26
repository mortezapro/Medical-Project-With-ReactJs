<?php
namespace App\Http\Requests\Value;
use Illuminate\Foundation\Http\FormRequest;

class StoreValueRequest extends FormRequest
{
    public function authorize():bool
    {
        return true;
    }

    public function rules():array
    {
        return [

        ];
    }
    public function messages():array
    {
        return [

        ];
    }
}
