<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductSell;

class MarketplaceController extends Controller
{
    public function marketplace()
    {
        $product_sells = ProductSell::orderBy('created_at', "DESC")
            ->where('status', "=", "sale")
            ->get();
        //dd($product_sells);
        return view('petowner_view/marketplace', [
            'product_sells' => $product_sells 
        ]);
    }

    public function marketSearch(Request $request)
    {
        $search = $request->get('search');
        //dd($search);
        $product_sells = ProductSell::where('product_name', 'LIKE', '%' .$search. '%')
            ->orWhere('description', 'LIKE', '%'. $search. '%')
            ->where('status', "=", "sale")
            ->orderBy('created_at', "DESC")
            ->get();
        return view('petowner_view/marketplace', [
            'product_sells' => $product_sells 
        ]);
    }

    

    public function vetmarketplace()
    {
        $product_sells = ProductSell::orderBy('created_at', "DESC")
        ->where('status', "=", "sale")
            ->get();
        //dd($product_sells);
        return view('vet_view/vet_marketplace', [
            'product_sells' => $product_sells 
        ]);
    }

    public function vetMarketSearch(Request $request)
    {
        $search = $request->get('search');
        //dd($search);
        $product_sells = ProductSell::where('product_name', 'LIKE', '%' .$search. '%')
            ->orWhere('description', 'LIKE', '%'. $search. '%')
            ->where('status', "=", "sale")
            ->orderBy('created_at', "DESC")
            ->get();
        return view('vet_view/vet_marketplace', [
            'product_sells' => $product_sells 
        ]);
    }

    public function suppliermarketplace()
    {
        $product_sells = ProductSell::orderBy('created_at', "DESC")
        ->where('status', "=", "sale")
        ->get();
        //dd($product_sells);
        return view('supplier_view/supplier_marketplace', [
            'product_sells' => $product_sells 
        ]);
    }

    public function supplierMarketSearch(Request $request)
    {
        $search = $request->get('search');
        //dd($search);
        $product_sells = ProductSell::where('product_name', 'LIKE', '%' .$search. '%')
            ->orWhere('description', 'LIKE', '%'. $search. '%')
            ->where('status', "=", "sale")
            ->orderBy('created_at', "DESC")
            ->get();
        return view('supplier_view/supplier_marketplace', [
            'product_sells' => $product_sells 
        ]);
    }


}
