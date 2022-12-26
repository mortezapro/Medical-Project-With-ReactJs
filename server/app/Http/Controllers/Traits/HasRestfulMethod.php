<?php
namespace App\Http\Controllers\Traits;
use Illuminate\Http\JsonResponse;

trait HasRestfulMethod{
    public function index()
    {
        return $this->successResponse(true,200,$this->service->index());
    }

    public function show(string $param)
    {
        $model = $this->service->show($param);
        return $this->successResponse(true,200,$model);
    }

    public function destroy(int $id)
    {
        $this->service->destroy($this->service->find($id));
        return $this->successResponse(true,200);
    }

    public function store()
    {
        // set request fro perform validation & authorization Form Request
        $this->setStoreRequest();
        $filenames =  $this->service->uploadFileIfExist($this->storeRequest);
        $data = $this->service->save($filenames + $this->storeRequest->all());
        return $this->successResponse(true,201,$data);
    }

    public function update(int $id) :JsonResponse
    {
        // set request fro perform validation & authorization Form Request
        $this->setUpdateRequest();
        $filenames =  $this->service->uploadFileIfExist($this->updateRequest);
        if($this->service->save($filenames + $this->updateRequest->all(),$id)){
            return $this->successResponse(true,201);
        }
        return $this->successResponse(false,204);
    }
}
