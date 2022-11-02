<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductSell;

class MarketSuppliesController extends Controller
{
    public function marketsupplies()
    {
        $product_sells = ProductSell::where('classification', '=', 'Supplies')
        ->orderBy('created_at', "DESC")
        ->where('status', "=", "sale")
            ->get();
        //dd($product_sells);
        return view('petowner_view/marketsupplies', [
            'product_sells' => $product_sells 
        ]);
    }

    public function marketSuppliesSearch(Request $request)
    {
        $search = $request->get('search');
        //dd($search);
        $product_sells = ProductSell::where('classification', '=', 'supplies')
            ->where(function($query) use ($search) {
                $query->where('product_name', 'LIKE', '%' .$search. '%')
                    ->orderBy('created_at', "DESC")
                    ->where('status', "=", "sale")
                    ->orwhere('description', 'LIKE', '%' .$search. '%');
            })
            ->get();
        return view('petowner_view/marketsupplies', [
            'product_sells' => $product_sells 
        ]);
    }
    
    public function vetmarketsupplies()
    {
        $product_sells = ProductSell::where('classification', '=', 'Supplies')
        ->orderBy('created_at', "DESC")
        ->where('status', "=", "sale")
            ->get();
        //dd($product_sells);
        return view('vet_view/vet_marketsupplies', [
            'product_sells' => $product_sells 
        ]);
    }

    public function vetMarketSuppliesSearch(Request $request)
    {
        $search = $request->get('search');
        //dd($search);
        $product_sells = ProductSell::where('classification', '=', 'supplies')
            ->where(function($query) use ($search) {
                $query->where('product_name', 'LIKE', '%' .$search. '%')
                ->orderBy('created_at', "DESC")
                ->where('status', "=", "sale")
                    ->orwhere('description', 'LIKE', '%' .$search. '%');
            })
            ->get();
        return view('vet_view/vet_marketsupplies', [
            'product_sells' => $product_sells 
        ]);
    }

    public function suppliermarketsupplies()
    {
        $product_sells = ProductSell::where('classification', '=', 'Supplies')
        ->orderBy('created_at', "DESC")
        ->where('status', "=", "sale")
            ->get();
        //dd($product_sells);
        return view('supplier_view/supplier_marketsupplies', [
            'product_sells' => $product_sells 
        ]);
    }

    public function suppliesMarketSuppliesSearch(Request $request)
    {
        $search = $request->get('search');
        //dd($search);
        $product_sells = ProductSell::where('classification', '=', 'supplies')
            ->where(function($query) use ($search) {
                $query->where('product_name', 'LIKE', '%' .$search. '%')
                ->orderBy('created_at', "DESC")
                ->where('status', "=", "sale")
                    ->orwhere('description', 'LIKE', '%' .$search. '%');
            })
            ->get();
        return view('vet_view/vet_marketsupplies', [
            'product_sells' => $product_sells 
        ]);
    }
}
