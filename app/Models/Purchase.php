<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\PurchasesController;
use App\Models\Stock;

class Purchase extends Model
{
    use HasFactory;

    public function stock(){
        return $this->belongsTo(Stock::class, 'stock_code');
    }
    
}

