<?php
# @Author: izzy
# @Date:   2019-11-22T10:19:53+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T10:58:52+00:00




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $home = 'user.home';

        if ($user->hasRole('admin')) {
            $home = 'admin.home';
        }
        else {
          $home = 'user.home';
        }

        return redirect()->route($home);

    }
}
