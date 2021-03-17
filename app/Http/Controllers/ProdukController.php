<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Photo;
use App\Product;

class ProdukController extends Controller
{
    public function index(Request $request){

        // $products = Product::select('id','nama','stok','kategori','photo','deskripsi','kondisi_produk','harga')->get();
        $products = Product::find(2)->orders;
        
        return response()->json(
            [
                'status'=>'success',
                'data'=>$products
            ],
            200
        );
    }

    public function create(Request $request){

        $product = new Product;
        $product->nama = $request->input('nama');
        $product->stok = $request->input('stok');
        $product->kategori  = $request->input('kategori');
        $product->photo  = $request->input('photo');
        $product->deskripsi  = $request->input('deskripsi');
        $product->kondisi_produk  = $request->input('kondisi_produk');
        $product->harga = $request->input('harga');

        if($product->save()){
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
    
        $photo = Photo::find($id);

        $photo->name = $request->input('name');
        $photo->title = $request->input('title');

        if($photo->save()){
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
    
        $photo = Photo::find($id);

        if($photo->delete()){
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
