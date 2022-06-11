<?php

namespace App\Http\Controllers\Admin\Partner;

use App\Http\Controllers\Controller;
use function view;

class IndexController extends Controller
{
    public function __invoke()
    {




        return view ('admin.partner.index');

    }
}
