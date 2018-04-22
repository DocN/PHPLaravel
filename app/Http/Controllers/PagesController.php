<?php
/**
 * Created by PhpStorm.
 * User: DrN
 * Date: 4/22/2018
 * Time: 10:43 AM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    protected function contact() {
        return view('pages.contactus');
    }

    public function about() {
        return view('pages.aboutus');
    }
}
