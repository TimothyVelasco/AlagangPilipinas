<?php

namespace App\Http\Controllers;

use App\Models\ProductSell;
use Illuminate\Http\Request;

class ProductCompareController extends Controller
{
    public function productcompare(Request $request){

        $product_ids = explode(',', $request->get('product_ids'));
        $productSells = ProductSell::whereIn('id', $product_ids)
            ->get();

        return view ("petowner_view/productcompare", [
            'productSells' => $productSells
        ]);
    }

    public function vetproductcompare(Request $request){

        $product_ids = explode(',', $request->get('product_ids'));
        $productSells = ProductSell::whereIn('id', $product_ids)
            ->get();

        return view ("vet_view/vet_productcompare", [
            'productSells' => $productSells
        ]);
    }

    public function supplierproductcompare(Request $request){
        $product_ids = explode(',', $request->get('product_ids'));
        $productSells = ProductSell::whereIn('id', $product_ids)
            ->get();

        return view ("supplier_view/supplier_productcompare", [
            'productSells' => $productSells
        ]);
    }
}
