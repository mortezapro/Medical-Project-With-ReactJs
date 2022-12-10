<?php

namespace App\Services\Post;

use App\Models\CategoryModel;
use App\Models\PostModel;
use App\Services\Base\BaseService;
use Illuminate\Support\Facades\App;

class PostService extends BaseService {

    public function __construct()
    {
        $this->model = App::make(PostModel::class);
    }

    public function related(array $categoryIds,PostModel $post,int $count)
    {
        return $this->model->related($categoryIds,$post,$count);
    }

    public function category(CategoryModel $category,int $paginate)
    {
        return $this->model->category($category,$paginate);
    }

    public function highlight(int $count)
    {
        return $this->model->highlight($count);
    }

    public function popularSwiper()
    {
        return $this->model->inRandomOrder()->limit(8)->get()->toArray();
    }

}
