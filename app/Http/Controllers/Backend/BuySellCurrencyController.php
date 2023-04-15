<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BuySellCurrency;
use App\Models\Currency;

class BuySellCurrencyController extends Controller
{
    public function buySellCurrencyList(){
        $buysell_currencies = BuySellCurrency::latest()->get();
        return view('backend.buysell_currency.list_buysell_currency',compact('buysell_currencies'));
    }

    public function buySellCurrencyAdd(){
        return view('backend.buysell_currency.add_buysell_currency');

    }

    public function buySellCurrencyStore(Request $request){
        $currency_id = $request->currency_id;
        $currency_name = Currency::where('id',$currency_id)->value('currency_name');
        $currency_img = Currency::where('id',$currency_id)->value('img');
        BuySellCurrency::insert([
            'currency_id' => $currency_id,
            'img' => $currency_img,
            'currency_name' => $currency_name,
            'buy_amount' => $request->buy_amount,
            'sell_amount' => $request->sell_amount

        ]);

        return redirect()->route('list.buysell.currencies')->with('message', 'Buy Sell Currency Added Successfully!');
    }

    public function buySellCurrencyEdit($id){

        $editData = BuySellCurrency::find($id);
        return view('backend.buysell_currency.edit_buysell_currency',compact('editData'));

    } // End Mathod

    public function buySellCurrencyUpdate(Request $request,$id){
        $currency_id = $request->currency_id;
        $currency_name = Currency::where('id',$currency_id)->value('currency_name');
        $currency_img = Currency::where('id',$currency_id)->value('img');

        $data = BuySellCurrency::find($id);

        $data->currency_id = $currency_id;
        $data->img = $currency_img;
        $data->currency_name = $currency_name;
        $data->buy_amount = $request->buy_amount;
        $data->sell_amount = $request->sell_amount;
        $data->save();

        return redirect()->route('list.buysell.currencies')->with('message', 'Currency Buy Sell Updated Successfully!');

    } // End Mathod

    public function buySellCurrencyDelete($id){

        $currency = BuySellCurrency::find($id);
        $currency->delete();


        return redirect()->route('list.buysell.currencies')->with('message', 'Currency Buy Sell Deleted Successfully!');


    } // End Mathod

}
