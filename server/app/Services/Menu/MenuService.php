<?php

namespace App\Services\Menu;

use App\Models\CategoryModel;
use App\Models\MenuModel;
use App\Services\Base\BaseService;
use Illuminate\Support\Facades\App;

class MenuService extends BaseService {

    public function __construct()
    {
        $this->model = App::make(MenuModel::class);
    }

}
