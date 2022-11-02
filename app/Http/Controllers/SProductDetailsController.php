<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductSell;
use App\Models\Review;

class SProductDetailsController extends Controller
{
    public function sproductdetails(Request $request)
    {
        $id = $request->get('id');
        $product_sell = ProductSell::where('id', $id)->first();
        $reviews = Review::where('id', $id)->first();

        return view('petowner_view/sproductdetails',[
            'product_sell' => $product_sell,
            'reviews' => $reviews
        ]);
    }

    public function markAsSold(ProductSell $productSellId)
    {
        $productSellId->status = "sold";
        $productSellId->save();

        return redirect(route("sales.sales"));
    }

    public function vetsproductdetails(Request $request)
    {
        $id = $request->get('id');
        $product_sell = ProductSell::where('id', $id)->first();
        $reviews = Review::where('id', $id)->first();

        return view('vet_view/vet_sproductdetails',[
            'product_sell' => $product_sell,
            'reviews' => $reviews
        ]);
    }

    public function vetmarkAsSold(ProductSell $productSellId)
    {
        $productSellId->status = "sold";
        $productSellId->save();

        return redirect(route("vet.sales"));
    }

    public function suppliersproductdetails(Request $request)
    {
        $id = $request->get('id');
        $product_sell = ProductSell::where('id', $id)->first();
        $reviews = Review::where('id', $id)->first();

        return view('supplier_view/supplier_sproductdetails',[
            'product_sell' => $product_sell,
            'reviews' => $reviews
        ]);
    }

    public function suppliermarkAsSold(ProductSell $productSellId)
    {
        $productSellId->status = "sold";
        $productSellId->save();

        return redirect(route("supplier.sales"));
    }
}
