<?php
namespace App\Http\Requests\InventoryItems;
use Illuminate\Foundation\Http\FormRequest;

class UpdateInventoryItemsRequest extends FormRequest
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
