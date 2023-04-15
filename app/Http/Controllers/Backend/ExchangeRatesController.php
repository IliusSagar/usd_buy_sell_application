<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExchangeRates;
use App\Models\Currency;

class ExchangeRatesController extends Controller
{
    public function exchangeRatesList(){
        $exchange_rates = ExchangeRates::latest()->get();
        return view('backend.exhange.list_exchange_rates',compact('exchange_rates'));
    }

    public function exchangeRatesAdd(){
        return view('backend.exhange.add_exchange_rates');
    }

    public function exchangeRatesStore(Request $request){
         $currency_id_send = $request->currency_id_send;
         $currency_id_receive = $request->currency_id_receive;
         $currency_name_send = Currency::where('id',$currency_id_send)->value('currency_name');
         $currency_name_receive = Currency::where('id',$currency_id_receive)->value('currency_name');
         $currency_img_send = Currency::where('id',$currency_id_send)->value('img');
         $currency_img_receive = Currency::where('id',$currency_id_receive)->value('img');

        ExchangeRates::insert([
           // 'currency_id_send' => $currency_id_send,

            'currency_id_send' => $request->currency_id_send,
            'currency_name_send' => $currency_name_send,
            'img_send' => $currency_img_send,
            'currency_id_receive' => $request->currency_id_receive,
            'currency_name_receive' => $currency_name_receive,
            'img_receive' => $currency_img_receive,
            'usd' => $request->usd,
            'bdt' => $request->bdt,
            'researve' => $request->researve,
            'usdbdt' => $request->usdbdt

        ]);

        return redirect()->route('list.exchange.rates')->with('message', 'Exchange Rates Added Successfully!');
    }

    public function exchangeRatesEdit($id){

        $editData = ExchangeRates::find($id);
        return view('backend.exhange.edit_exchange_rates',compact('editData'));

    } // End Mathod

    public function exchangeRatesUpdate(Request $request,$id){
        $currency_id_send = $request->currency_id_send;
         $currency_id_receive = $request->currency_id_receive;
         $currency_name_send = Currency::where('id',$currency_id_send)->value('currency_name');
         $currency_name_receive = Currency::where('id',$currency_id_receive)->value('currency_name');
         $currency_img_send = Currency::where('id',$currency_id_send)->value('img');
         $currency_img_receive = Currency::where('id',$currency_id_receive)->value('img');

        $data = ExchangeRates::find($id);



        $data->currency_id_send = $request->currency_id_send;
        $data->currency_name_send = $currency_name_send;
        $data->img_send = $currency_img_send;
        $data->currency_id_receive = $request->currency_id_receive;
        $data->currency_name_receive = $currency_name_receive;
        $data->img_receive = $currency_img_receive;
        $data->usd = $request->usd;
        $data->bdt = $request->bdt;
        $data->researve = $request->researve;
        $data->usdbdt = $request->usdbdt;

        $data->save();

        return redirect()->route('list.exchange.rates')->with('message', 'Exchange Rates Updated Successfully!');

    } // End Mathod

    public function exchangeRatesDelete($id){

        $currency = ExchangeRates::find($id);
        $currency->delete();


        return redirect()->route('list.exchange.rates')->with('message', 'Exchange Rates Deleted Successfully!');


    } // End Mathod

}
