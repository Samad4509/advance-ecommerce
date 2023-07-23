<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcomarceController extends Controller
{
    public function index()
    {
        return view('forntEnd.home.home');
    }
    public function products()
    {
        return view('forntEnd.product.product');
    }
    public function productDetails()
    {
        return view('forntEnd.product.product-detail');
    }
    public function productCard()
    {
        return view('forntEnd.card.card');
    }
    public function checkout()
    {
        return view('forntEnd.card.checkOut');
    }
    public function userLogin()
    {
        return view('forntEnd.user.user-login');
    }
    public function UserRegister()
    {
        return view('forntEnd.user.user-register');
    }
    public function UserAccount()
    {
        return view('forntEnd.user.user-acount');
    }
}
