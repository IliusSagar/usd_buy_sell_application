<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReaserveCurrency;
use App\Models\Currency;

class ResearveCurrencyController extends Controller
{
    public function researveCurrencyList(){
        $researve_currencies = ReaserveCurrency::latest()->get();
        return view('backend.researve_currency.list_researve_currency',compact('researve_currencies'));
    }

    public function researveCurrencyAdd(){
        return view('backend.researve_currency.add_researve_currency');
    }

    public function researveCurrencyStore(Request $request){
        $currency_id = $request->currency_id;
        $currency_name = Currency::where('id',$currency_id)->value('currency_name');
        $currency_img = Currency::where('id',$currency_id)->value('img');
        ReaserveCurrency::insert([
            'currency_id' => $currency_id,
            'img' => $currency_img,
            'currency_name' => $currency_name,
            'amount' => $request->amount,
            'usdbdt' => $request->usdbdt

        ]);

        return redirect()->route('list.researve.currencies')->with('message', 'Reserve Currency Added Successfully!');
    }

    public function researveCurrencyEdit($id){

        $editData = ReaserveCurrency::find($id);
        return view('backend.researve_currency.edit_researve_currency',compact('editData'));

    } // End Mathod

    public function researveCurrencyUpdate(Request $request,$id){
        $currency_id = $request->currency_id;
        $currency_name = Currency::where('id',$currency_id)->value('currency_name');
        $currency_img = Currency::where('id',$currency_id)->value('img');

        $data = ReaserveCurrency::find($id);

        $data->currency_id = $currency_id;
        $data->img = $currency_img;
        $data->currency_name = $currency_name;
        $data->amount = $request->amount;
        $data->usdbdt = $request->usdbdt;
        $data->save();

        return redirect()->route('list.researve.currencies')->with('message', 'Currency Researve Updated Successfully!');

    } // End Mathod

    public function researveCurrencyDelete($id){

        $currency = ReaserveCurrency::find($id);
        $currency->delete();


        return redirect()->route('list.researve.currencies')->with('message', 'Currency Researve Deleted Successfully!');


    } // End Mathod

}
