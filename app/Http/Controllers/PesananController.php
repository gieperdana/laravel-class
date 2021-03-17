<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesanan;
use App\Product;

class PesananController extends Controller
{
    public function index(Request $request){
        // Cari pesanan
        $pesanan = Pesanan::select('id','nomor_order','qty','product_id','total_harga','promo_diskon','ongkir')->get();
        
        return response()->json(
            [
                'status'=>'success',
                'data'=>$pesanan,
            ],
            200
        );
    }

    public function create(Request $request){

        $pesanan = new Pesanan;
        $pesanan->nomor_order = date('Ymdhis');
        $pesanan->qty = $request->input('qty');
        $pesanan->product_id  = $request->input('product_id');
        $pesanan->total_harga  = $request->input('harga') * $request->input('qty');
        $pesanan->promo_diskon  = $request->input('promo_diskon');
        $pesanan->ongkir  = $request->input('ongkir');

        if($pesanan->save()){
            $message = 'insert success';
        }else{
            $message = 'insert failed';
        }
        return response()->json(
            [
                'status'=>'success',
                'message'=>$message
            ]
        );
    }

    public function put(Request $request, $id){
    
        $pesanan = Pesanan::find($id);

        $pesanan->qty = $request->input('qty');
        $pesanan->product_id  = $request->input('product_id');
        $pesanan->total_harga  = $request->input('total_harga');
        $pesanan->promo_diskon  = $request->input('promo_diskon');
        $pesanan->ongkir  = $request->input('ongkir');

        if($pesanan->save()){
            $message = 'update success';
        }else{
            $message = 'update failed';
        }

        return response()->json(
            [
                'status'=>'success',
                'message'=>$message
            ]
        );
    }

    public function delete($id){
    
        $pesanan = Pesanan::find($id);

        if($pesanan->delete()){
            $message = 'delete success';
        }else{
            $message = 'delete failed';
        }

        return response()->json(
            [
                'status'=>'success',
                'message'=>$message
            ]
        );

    }
}
