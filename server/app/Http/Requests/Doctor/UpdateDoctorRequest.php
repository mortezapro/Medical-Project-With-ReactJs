<?php
namespace App\Http\Requests\Doctor;
use Illuminate\Foundation\Http\FormRequest;

class UpdateDoctorRequest extends FormRequest
{
    public function authorize():bool
    {
        return true;
    }

    public function rules():array
    {
        return [
            "full_name" => "required|min:3",
            "username" => "required|unique:doctors,username,".$this->route()->parameter('doctor'),
            "expert" => "required",
            "office_address" => "nullable",
        ];
    }
    public function messages():array
    {
        return [
            "name.required" => "نام کاربری اجباری است",
            "name.min" => "حداقل ۳ کاراکتر برای نام وارد کنید",
            "username.required" => "واردکردن یوزرنیم اجباری است",
            "username.unique" => "یوزرنیم قبلا در سیستم ثبت شده است",
            "expert.required" => "وارد کردن تخصص اجباری است",
        ];
    }
}
