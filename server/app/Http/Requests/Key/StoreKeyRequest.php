<?php
namespace App\Http\Requests\Key;
use Illuminate\Foundation\Http\FormRequest;

class StoreKeyRequest extends FormRequest
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
