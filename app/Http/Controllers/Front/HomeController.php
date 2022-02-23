<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Traits\AuthTrait;
use App\Models\Contenido;
use App\Models\GlosarioMenu;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    use AuthTrait;

    public function index(Request $request)
    {
        if ($this->isAdmin()) {
            return redirect()
                ->route('admin.index');
        }
        return view('front.index');
    }

    public function quienesSomos(Request $request)
    {
        return view('front.page.quienesSomos');
    }

}
