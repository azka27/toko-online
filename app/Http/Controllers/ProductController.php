<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showAll() {
		$dataProductDariModel = Product::all();
		return view('product.display', ["products" => $dataProductDariModel]);
	}
	public function saveNew() {
		// kode logika untuk menyimpan data baru
	}
	public function show($id) {
		//
	}
	public function create(Request $request) {
		$product_name = $request->get("product_name");
		$product_stock = $request->get("stock");
		$product_desc = $request->get("description");
		$product_price = $request->get("price");
	}
	public function except(Request $request) {
		$data = $request->except(['_token']);
	}
}
