<?php

namespace App\Http\Controllers;
use App\Http\Requests\Doctor\StoreDoctorRequest;
use App\Http\Requests\Doctor\UpdateDoctorRequest;
use App\Services\Doctor\DoctorServiceInterface;
use Illuminate\Support\Facades\App;

class DoctorController extends Controller
{
    public DoctorServiceInterface $service;
    public StoreDoctorRequest $storeRequest;
    public UpdateDoctorRequest $updateRequest;

    public function __construct()
    {
        $this->setService();
    }
    public function setService()
    {
        $this->service = App::make(DoctorServiceInterface::class);
    }

    public function setStoreRequest()
    {
        $this->storeRequest = App::make(StoreDoctorRequest::class);
    }

    public function setUpdateRequest()
    {
        $this->updateRequest = App::make(UpdateDoctorRequest::class);
    }
}
