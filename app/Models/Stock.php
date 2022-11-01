<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\StocksController;

class Stock extends Model
{
    use HasFactory;

    protected $appends = ['text'];

    public function getTextAttribute() {
        return $this->stock_code;
    }
}
