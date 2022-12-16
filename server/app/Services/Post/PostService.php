<?php

namespace App\Services\Post;

use App\Http\Resources\PostResource;
use App\Models\CategoryModel;
use App\Models\PostModel;
use Illuminate\Database\Eloquent\Model;
use App\Services\Base\BaseService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class PostService extends BaseService implements PostServiceInterface
{
    public JsonResource $resource;
    protected Model $model;

    public function __construct()
    {
        $this->setModel();
        $this->setResource();
    }
    public function setModel():void
    {
        $this->model = App::make(PostModel::class);
    }
    public function setResource():void
    {
        $this->resource = new PostResource(request());
    }

    public function related(array $categoryIds,PostModel $post,int $count)
    {
        return $this->model->whereHas("categories",function ($q) use ($categoryIds,$post,$count){
            $q->whereIn("id",$categoryIds);
        })->where("id","!=",$post->id)->latest()->take($count)->get();
    }

    public function category(CategoryModel $category, int $paginate)
    {
        return $this->model->category($category, $paginate);
    }

    public function highlight(int $count)
    {
        return $this->resource::collection($this->model->inRandomOrder()->limit($count)->get());
    }

    public function popularSwiper()
    {
        return $this->resource::collection($this->model->inRandomOrder()->limit(8)->get());
    }

}
