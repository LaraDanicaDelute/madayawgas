<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Stock;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;



class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::orderby('created_at', 'DESC')->get();
        return view('stocks.index', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view (view: 'stocks.create');

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
            'stock_code' => 'required|unique:stocks',
            'product_name' => 'required|min:5|max:100',
            'total_stocks' => 'required',
            'original_price' => 'required',
            'retail_price' => 'required',
        ]);

        
        if($validate->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validate->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $stock = new Stock();
        $stock-> stock_code = $request->stock_code;
        $stock->product_name = $request->product_name;
        $stock->total_stocks = $request->total_stocks;
        $stock->original_price = $request->original_price;
        $stock->retail_price = $request->retail_price;
        $stock->save();

          
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $stock = Stock::findOrFail($id);
       return view('stocks.edit', compact('stock'));

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
        $this->validate($request, [
            //'stock_code' => 'max:255,'. $id,
            //'product_name' => 'min:5|max:100,'. $id,
            'total_stocks' => 'max:100,'. $id,
            //'original_price' => 'min:2|max:11,'. $id,
            //'retail_price' => 'min:2|max:11,'. $id,
        ]);

        $stock = Stock::findOrFail($id);
        //$stock->stock_code = $request->stock_code;
        //$stock->product_name = $request->product_name;
        $stock->total_stocks = $request->total_stocks;
        //$stock->original_price = $request->original_price;
        //$stock->retail_price = $request->retail_price;
        $stock->save();

        flash(message: 'Product Stock successfully updated!')->success();
        return redirect()->route('stocks.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stock = Stock::findOrFail($id);
        $stock->delete();

        flash(message: 'Product Stock successfully deleted!')->success();
        return redirect()->route('stocks.index');

    }
//HANDLE AJAX REQUEST
    public function getStocksJson() {
        $stocks = Stock::all();

        return response()->json([
            'success' => true,
            'data' => $stocks
        ], Response::HTTP_OK );
    }
}
