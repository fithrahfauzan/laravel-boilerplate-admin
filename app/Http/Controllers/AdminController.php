<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Laracasts\Utilities\JavaScript\JavaScriptFacade as JavaScript;
use App\Http\Models\HomeSlider;
use App\Http\Models\SchoolProfile;
use App\Http\Models\Article;

/**
 * Controller For Admin Page
 * @author Fithrah Fauzan
 * @year 2019
 */
class AdminController extends Controller
{
    /**
     * Index Pages
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse     
     */
    public function index() 
    {
        return redirect()->route('admin.dashboard');
    }

    /**
     * Dashboard page
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function dashboard()
    {
        $pageName = 'dashboard';

        return view('pages.admin.dashboard.list', compact('pageName'));
    }
        
}
