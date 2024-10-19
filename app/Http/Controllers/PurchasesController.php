<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Purchase;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;



class PurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases = Purchase::with(['stock'])
                    ->orderby('created_at', 'DESC')->get();
        return view('purchases.index', compact('purchases'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view (view: 'purchases.create');
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
            'item_price' => 'required',
            'number_of_items' => 'required',
            'total_payment' => ''
        
        ]);

        if($validate->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validate->errors()
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        //store 
        $purchase = new Purchase();
        $purchase->user_id = Auth::id();
        $purchase->stock_code = $request->stock_code;
        $purchase->item_price = $request->item_price;
        $purchase->number_of_items = $request->number_of_items;
        $purchase->total_payment = $request->item_price * $request->number_of_items; 
        $purchase->save();
        
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
        $purchase = Purchases::where('id', $id)->first();
        return view('purchases.show', compact('purchase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $purchase = Purchase::findOrFail($id);
       return view('purchases.edit', compact('purchase'));
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
            'item_price' => 'max:100,'. $id,
            'number_of_items' => 'min:1|max:11,'. $id,
            'total_payment' => 'min:2|max:11,'. $id,
        ]);

        $purchase = Purchase::findOrFail($id);
        $purchase->item_price = $request->item_price;
        $purchase->number_of_items = $request->number_of_items;
        $purchase->total_payment = $request->item_price *$request->number_of_items;
        $purchase->save();

        flash(message: 'Purchase Updated!')->success();
        return redirect()->route('purchases.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
