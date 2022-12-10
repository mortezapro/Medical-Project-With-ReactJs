<?php

namespace App\Http\Controllers;

use App\Services\Menu\MenuService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MenuController extends Controller
{
    public MenuService $menuService;
    public function __construct()
    {
        $this->menuService = App::make(MenuService::class);
    }
}
