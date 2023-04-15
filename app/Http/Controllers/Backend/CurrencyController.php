<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Currency;

class CurrencyController extends Controller
{
    public function currencyList(){
        $currencies = Currency::latest()->get();
        return view('backend.currency.list_currency', compact('currencies'));
    }

    public function currencyAdd(){
        return view('backend.currency.add_currency');
    }

    public function currencyStore(Request $request) {

        // $image = $request->file('img');
        // $img_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        // $request->product_img->move(public_path('upload'),$img_name);
        // $img_url = 'upload/'.$img_name;

            $file = $request->file('img');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload'),$filename);
            $user['img'] = $filename;

        Currency::insert([
            'currency_name' => $request->currency_name,
            'img' => $user['img']
        ]);



        return redirect()->route('list.currencies')->with('message', 'Currency Added Successfully!');
    }

    public function currencyEdit($id){

        $editData = Currency::find($id);
        return view('backend.currency.edit_currency',compact('editData'));

    } // End Mathod

    public function currencyUpdate(Request $request,$id){

            $file = $request->file('img');
            @unlink(public_path('upload/'.$data->img));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload'),$filename);
            $user['img'] = $filename;

        $data = Currency::find($id);

        $data->currency_name = $request->currency_name;
        $data->img = $user['img'];
        $data->save();

        return redirect()->route('list.currencies')->with('message', 'Currency Updated Successfully!');

    } // End Mathod

    public function currencyDelete($id){

        $currency = Currency::find($id);
        $currency->delete();


        return redirect()->route('list.currencies')->with('message', 'Currency Deleted Successfully!');


    } // End Mathod


}
