<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public function products()
    {
        $tile = 'Products';
        $products = Product::paginate(8);
        return view('layouts.user.cart.products')->with('products', $products)->with('title', $tile);
    }
    public function index()
    {
        return view('layouts.user.cart.cart');
    }
    public function addToCart(Request $request, $id)
    {
        try {
            $products = Product::find($id);

            Cart::add([
                'id' => $products->id,
                'name' => $products->name,
                'qty' => 1,
                'price' => $products->price,
                'img' => $products->img,
                'options' => [
                    'img' => $products->img,
                ]
            ]);
            // return Cart::content()->toJson();
            $carts = Cart::content();
            return redirect()->route('addToCart')
                ->with('success', 'Product added to cart')
                ->with('carts', $carts);
        } catch (\Exception $e) {
            return $e->getMessage();

        }
    }

    public function destroy($id)
    {
        try {
            Cart::remove($id);
            return redirect()
                ->route('addToCart')
                ->with('success', 'Product removed from cart');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public function destroyAll()
    {
        try {
            Cart::destroy();
            return redirect()
                ->route('addToCart')
                ->with('success', 'Removed all product from cart');
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }
    public function update(Request $request)
    {

        try {
            $request->validate([
                'qty' => 'required|array|min:1',
                // 'qty.*' => 'required|integer|min:1'
            ]);
            $data = $request->get('qty');
            foreach ($data as $id => $qty) {

                Cart::update($id, $qty);
            }
            return redirect()
                ->route('addToCart')
                ->with('success', 'Product updated from cart');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        // $request->validate([
        //     'qty' => 'required|array', // Xác nhận qty là một mảng
        //     'qty.*' => 'numeric|min:1' // Xác nhận từng phần tử trong mảng là số và >= 1
        // ]);

        // dd($request->input('qty')); // Kiểm tra dữ liệu nhận được
    }





}
