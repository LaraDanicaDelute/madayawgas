<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\User;
use App\Models\Purchase;

class DashboardController extends Controller
{
    public function index() {
        $stocks = Stock::count();
        $users = User::count();
        $purchases = Purchase::count();
        $prod_stock = Stock::get();

        return view('dashboard', compact('stocks', 'users', 'purchases', 'prod_stock'));
    }
}
