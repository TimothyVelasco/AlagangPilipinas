<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\ProductSell;

class ProductController extends Controller
{
    public function sell (Request $request)
    {
        $product_name = $request->get('product_name');
        $description = $request->get('description');
        $price = $request->get('price');
        $status = $request->get('status');
        $classification = $request->get('classification');
        $filenameWithExt = $request->file('product_photo')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('product_photo')->getClientOriginalExtension();
        $fileNameToStore = $filename . '' . $product_name . '.' . $extension;
        $path = $request->file('product_photo')->storeAs('public/product_photos', $fileNameToStore);
        $product_photo = $fileNameToStore;
        $product_sell = new ProductSell;
        $product_sell->user_id = Auth::user()->id;
        $product_sell->product_name = $product_name;
        $product_sell->status = $status;
        $product_sell->description = $description;
        $product_sell->price = $price;
        $product_sell->classification = $classification;
        $product_sell->product_photo = $product_photo;
        $product_sell->save();

        return redirect(route("sales.sales"));

    }

    public function vetsell (Request $request)

    {
        $product_name = $request->get('product_name');
        $description = $request->get('description');
        $price = $request->get('price');
        $status = $request->get('status');
        $classification = $request->get('classification');
        $filenameWithExt = $request->file('product_photo')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('product_photo')->getClientOriginalExtension();
        $fileNameToStore = $filename . '' . $product_name . '.' . $extension;
        $path = $request->file('product_photo')->storeAs('public/product_photos', $fileNameToStore);
        $product_photo = $fileNameToStore;
        $product_sell = new ProductSell;
        $product_sell->user_id = Auth::user()->id;
        $product_sell->product_name = $product_name;
        $product_sell->status = $status;
        $product_sell->description = $description;
        $product_sell->price = $price;
        $product_sell->classification = $classification;
        $product_sell->product_photo = $product_photo;
        $product_sell->save();

        return redirect(route("vet.sales"));

    }

    public function suppliersell (Request $request)
    
    {
        $product_name = $request->get('product_name');
        $description = $request->get('description');
        $price = $request->get('price');
        $status = $request->get('status');
        $classification = $request->get('classification');
        $filenameWithExt = $request->file('product_photo')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('product_photo')->getClientOriginalExtension();
        $fileNameToStore = $filename . '' . $product_name . '.' . $extension;
        $path = $request->file('product_photo')->storeAs('public/product_photos', $fileNameToStore);
        $product_photo = $fileNameToStore;
        $product_sell = new ProductSell;
        $product_sell->user_id = Auth::user()->id;
        $product_sell->product_name = $product_name;
        $product_sell->status = $status;
        $product_sell->description = $description;
        $product_sell->price = $price;
        $product_sell->classification = $classification;
        $product_sell->product_photo = $product_photo;
        $product_sell->save();

        return redirect(route("supplier.sales"));
    }


}
