<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index() : View
    {
        return view('admin.index');
    }

    public function products() : View
    {
        return view('admin.products', ['products' => Product::all()]);
    }

    public function users() : View
    {
        return view('admin.users', ['products' => User::all()]);
    }

    public function destroy_product(Request $request): RedirectResponse
    {
        return redirect()->route('admin.products');
    }
    public function destroy_user(Request $request): RedirectResponse
    {
        return redirect()->route('admin.users');
    }


}
