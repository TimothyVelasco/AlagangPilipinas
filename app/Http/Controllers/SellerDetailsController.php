<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductSell;
use App\Models\Vet;
use App\Models\User;



class SellerDetailsController extends Controller
{
    public function sellerdetails(Request $request)
    {
        $id = $request->get('id');
        $product_sell = ProductSell::where('product_sells.id', $id)
            ->leftJoin('users', 'product_sells.user_id', '=', 'users.id')
            ->first();
        $user_type = null;
        if ($product_sell->user_type == 1) {
            $user_type = "Pet owner";
        } else if ($product_sell->user_type == 2) {
            $user_type = "Vet Clinic";
        } else {
            $user_type = "Seller";
        }
        //dd($product_sell);
        return view('petowner_view/sellerdetails',[
            'product_sell' => $product_sell,
            'user_type' => $user_type,
        ]);
    }

    public function vetdetails(Request $request)
    {
        $id = $request->get('id');
        $vets = Vet::where('id', $id)->first();
        //dd($vets);
        return view('petowner_view/vetprofile',[
            'vets' => $vets
        ]);
    }

    public function suppliersellerdetails(Request $request)
    {
        $id = $request->get('id');
        $product_sell = ProductSell::where('product_sells.id', $id)
            ->leftJoin('users', 'product_sells.user_id', '=', 'users.id')
            ->first();
        $user_type = null;
        if ($product_sell->user_type == 1) {
            $user_type = "Pet owner";
        } else if ($product_sell->user_type == 2) {
            $user_type = "Vet Clinic";
        } else {
            $user_type = "Seller";
        }
        //dd($product_sell);
        return view('supplier_view/supplier_sellerdetails',[
            'product_sell' => $product_sell,
            'user_type' => $user_type,
        ]);
    }

    public function suppliervetdetails(Request $request)
    {
        $id = $request->get('id');
        $vets = Vet::where('id', $id)->first();
        //dd($product_sell);
        return view('supplier_view/supplier_vetdetails',[
            'vets' => $vets
        ]);
    }

    
    public function vetsellerdetails(Request $request)
    {
        $id = $request->get('id');
        $product_sell = ProductSell::where('product_sells.id', $id)
            ->leftJoin('users', 'product_sells.user_id', '=', 'users.id')
            ->first();
        $user_type = null;
        if ($product_sell->user_type == 1) {
            $user_type = "Pet owner";
        } else if ($product_sell->user_type == 2) {
            $user_type = "Vet Clinic";
        } else {
            $user_type = "Seller";
        }
        //dd($product_sell);
        return view('vet_view/vet_sellerdetails',[
            'product_sell' => $product_sell,
            'user_type' => $user_type
        ]);
    }

    public function vetvetdetails(Request $request)
    {
        $id = $request->get('id');
        $vets = Vet::where('id', $id)->first();
        //dd($product_sell);
        return view('vet_view/vet_vetdetails',[
            'vets' => $vets,
            
        ]);
    }

}
