<?php
namespace App\Http\Requests\Brand;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Traits\ResponseValidation;

class UpdateBrandRequest extends FormRequest
{
    use ResponseValidation;
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
