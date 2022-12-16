<?php
namespace App\Http\Controllers\Traits;
use Illuminate\Http\Request;

trait HasRestfulMethod{
    public function index()
    {
        return $this->service->index();
    }

    public function show(string $slug)
    {
        return $this->service->show($slug);
    }

    public function destroy(int $id)
    {
        return $this->service->destroy($id);
    }

    public function save(Request $request)
    {
        return $this->service->create($request);
    }

}
