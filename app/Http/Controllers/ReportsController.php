<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Report;
use App\Models\Purchase;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    
    {
        
        $reports = DB::table('purchases')
                    ->join('reports', function ($q) {
                     $q->on('purchases.stock_code', '=', 'reports.stock_code');
                    })
                    ->select('purchases.stock_code', DB::raw('SUM(purchases.number_of_items) as sold_items'), 
                    DB::raw('SUM(purchases.total_payment) as total_sales'))
                    ->groupBy('purchases.stock_code')
                    ->get();     
  
                    
        return view('reports.index', compact('reports'));
     
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'stock_code' => 'required|numeric',
            'sold_items' => 'numeric',
            'total_sales' => 'numeric'

        ]);

        if($validate->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validate->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        //store 
        $report = new Report();
        $report->stock_code = $request->stock_code;
        $report->sold_items = $request->sold_items;
        $report->total_sales = $request->total_sales;
        $report->save();
        
        return response()->json([
            'success' => true,
        ], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = Report::findOrFail($id);
        $report->delete();

        flash(message: 'Product Stock successfully deleted!')->success();
        return redirect()->route('reports.index');
    }
}
