<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductSell;

class MarketPetsController extends Controller
{
     public function marketpets()
     {
        $product_sells = ProductSell::where('classification', '=', 'Pet')
        ->orderBy('created_at', "DESC")
        ->where('status', "=", "sale")
            ->get();
        //dd($product_sells);
        return view('petowner_view/marketpets', [
            'product_sells' => $product_sells 
        ]);
    }

    public function marketPetsSearch(Request $request)
    {
        $search = $request->get('search');
        //dd($search);
        $product_sells = ProductSell::where('classification', '=', 'pet')
            ->where(function($query) use ($search) {
                $query->where('product_name', 'LIKE', '%' .$search. '%')
                ->orderBy('created_at', "DESC")
                ->where('status', "=", "sale")
                    ->orwhere('description', 'LIKE', '%' .$search. '%');
            })
            ->get();
        return view('petowner_view/marketpets', [
            'product_sells' => $product_sells 
        ]);
    }

    public function vetmarketpets()
    {
        $product_sells = ProductSell::where('classification', '=', 'Pet')
        ->orderBy('created_at', "DESC")
        ->where('status', "=", "sale")
            ->get();
        //dd($product_sells);
        return view('vet_view/vet_marketpets', [
            'product_sells' => $product_sells 
        ]);
    }
    
    public function vetMarketPetsSearch(Request $request)
    {
        $search = $request->get('search');
        //dd($search);
        $product_sells = ProductSell::where('classification', '=', 'pet')
            ->where(function($query) use ($search) {
                $query->where('product_name', 'LIKE', '%' .$search. '%')
                ->orderBy('created_at', "DESC")
                ->where('status', "=", "sale")
                    ->orwhere('description', 'LIKE', '%' .$search. '%');
            })
            ->get();
        return view('vet_view/vet_marketpets', [
            'product_sells' => $product_sells 
        ]);
    }

    public function suppliermarketpets()
    {
        $product_sells = ProductSell::where('classification', '=', 'Pet')
        ->orderBy('created_at', "DESC")
        ->where('status', "=", "sale")
            ->get();
        //dd($product_sells);
        return view('supplier_view/supplier_marketpets', [
            'product_sells' => $product_sells 
        ]);
    }

    public function suppliesMarketPetsSearch(Request $request)
    {
        $search = $request->get('search');
        //dd($search);
        $product_sells = ProductSell::where('classification', '=', 'pet')
            ->where(function($query) use ($search) {
                $query->where('product_name', 'LIKE', '%' .$search. '%')
                ->orderBy('created_at', "DESC")
                ->where('status', "=", "sale")
                    ->orwhere('description', 'LIKE', '%' .$search. '%');
            })
            ->get();
        return view('vet_view/vet_marketpets', [
            'product_sells' => $product_sells 
        ]);
    }
}
