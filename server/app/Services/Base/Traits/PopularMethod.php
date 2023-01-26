<?php
namespace App\Services\Base\Traits;
use App\Helpers\Images;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

trait PopularMethod{

    protected Images $images;

    public function setImages()
    {
        $this->images = new Images();
    }
    public function paginate(int $count): AnonymousResourceCollection
    {
        return $this->resource::collection($this->model->paginate($count));
    }

    public function find(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function count($condition)
    {
        return $this->model->where($condition)->count();
    }
    public function where($condition)
    {
        return $this->model->where($condition);
    }

    public function uploadFile(Request $request, string $input,string $path) :string
    {
        $this->setImages();
        return $this->images->uploadFile($request,$input,$path);
    }

    public function uploadFileIfExist(Request $request) :array
    {
        $inputImages = ["thumbnail","seo_image","logo","avatar"];
        $filenames=[];
        foreach ($inputImages as $item) {
            if($request->has($item)){
                $filenames[$item] = $this->uploadFile($request,$item,config("path.".$item));
            }
        }
        return $filenames;
    }
}
