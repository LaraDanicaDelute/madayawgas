<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\DB;
use App\Models\Stock;
use App\Models\Purchases;

class Report extends Model
{
    use HasFactory;

    public function stock(){
        return $this->belongsTo(Stock::class, 'stock_code');
    }

    
    
}
