<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Content description
        $content = 'Product';

        // Data fetch
        $products = Product::select('id','nama','stok','kategori','photo','deskripsi','kondisi_produk','harga')->get();

        // Response Data Pack
        $data = [
            'content'=>$content,
            'data'=>$products
        ];

        return view('app',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $product = new Product;

        $product->nama = $request->input('name');
        $product->stok = $request->input('stok');
        $product->kategori = 'Test';
        $product->photo = 'photo';
        $product->deskripsi = 'Deskripsi';
        $product->kondisi_produk = 'Baru';
        $product->harga = $request->input('harga');
        $product->promo = 0;

        if($product->save()){
            return redirect()->route('product');
        }
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
