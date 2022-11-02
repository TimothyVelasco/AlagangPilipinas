<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\ProductSell;
use App\Models\{
    Vet,
    Review,
    User
};

class MarketplaceProductDetailsController extends Controller
{
    public function marketpdetails(Request $request)
    {
        $id = $request->get('id');
        $product_sell = ProductSell::where('id', $id)->first();
        //dd($product_sell);
        $reviews = Review::where('reviews.product_id', $product_sell->id)
            ->leftJoin('users', 'reviews.user_id', '=', 'users.id')
            ->get();
        $users = User::where('id',Auth::user()->id)
        ->get();
        //dd($user);
        return view('petowner_view/marketpdetails',[
            'product_sell' => $product_sell,
            'users' => $users,
            'reviews' => $reviews
        ]);

    }

    public function marketvetpdetails(Request $request)
    {
        $id = $request->get('id');
        $vet = Vet::where('id', $id)->first();
        //dd($vet);
        $reviews = Review::where('reviews.vet_id', $vet->id)
        ->leftJoin('users', 'reviews.user_id', '=', 'users.id')
        ->get();
        $users = User::where('id',Auth::user()->id)
        ->get();
        return view('petowner_view/marketvetpdetails',[
            'vet' => $vet,
            'users'=> $users,
            'reviews'=> $reviews


        ]);
    }

    public function review(Request $request)
    {
        $product_id =$request->get('product_id');
        $review = $request->get('review');
        $reviews = new Review;
        $reviews->user_id = Auth::user()->id;
        $reviews->product_id = $product_id;
        $reviews->review = $review;
        $reviews->save();

        return redirect(route("marketpdetails.marketpdetails", ['id' => $product_id]));
    }

    public function vetreview(Request $request)
    {
        $vet_id =$request->get('vet_id');
        $review = $request->get('review');
        $reviews = new Review;
        $reviews->user_id = Auth::user()->id;
        $reviews->vet_id = $vet_id;
        $reviews->review = $review;
        $reviews->save();

        return redirect(route("marketpdetails.marketvetpdetails", ['id' => $vet_id]));
    }

    public function vetmarketpdetails(Request $request)
    {
        $id = $request->get('id');
        $product_sell = ProductSell::where('id', $id)->first();
        //dd($product_sell);
        $reviews = Review::where('reviews.product_id', $product_sell->id)
        ->leftJoin('users', 'reviews.user_id', '=', 'users.id')
        ->get();
        $users = User::where('id',Auth::user()->id)
        ->get();
        return view('vet_view/vet_marketpdetails',[
            'product_sell' => $product_sell,
            'users'=>$users,
            'reviews'=>$reviews


        ]);
    }

    public function vetmarketvetpdetails(Request $request)
    {
        $id = $request->get('id');
        $vet = Vet::where('id', $id)->first();
        //dd($vet);
        $reviews = Review::where('reviews.vet_id', $vet->id)
        ->leftJoin('users', 'reviews.user_id', '=', 'users.id')
        ->get();
        $users = User::where('id',Auth::user()->id)
        ->get();
        return view('vet_view/vet_marketvetpdetails',[
            'vet' => $vet,
            'users'=>$users,
            'reviews'=> $reviews

        ]);
    }

    public function vetpreview(Request $request)
    {
        $product_id =$request->get('product_id');
        $review = $request->get('review');
        $reviews = new Review;
        $reviews->user_id = Auth::user()->id;
        $reviews->product_id = $product_id;
        $reviews->review = $review;
        $reviews->save();

        return redirect(route("marketpdetails.vetmarketpdetails", ['id' => $product_id]));
    }
    public function vetvetreview(Request $request)
    {
        $vet_id =$request->get('vet_id');
        $review = $request->get('review');
        $reviews = new Review;
        $reviews->user_id = Auth::user()->id;
        $reviews->vet_id = $vet_id;
        $reviews->review = $review;
        $reviews->save();

        return redirect(route("vetmarketpdetails.vetmarketvetpdetails", ['id' => $vet_id]));
    }


    public function suppliermarketpdetails(Request $request)
    {
        $id = $request->get('id');
        $product_sell = ProductSell::where('id', $id)->first();
        //dd($product_sell);
        $reviews = Review::where('reviews.product_id', $product_sell->id)
        ->leftJoin('users', 'reviews.user_id', '=', 'users.id')
        ->get();
        $users = User::where('id',Auth::user()->id)
        ->get();
        return view('supplier_view/supplier_marketpdetails',[
            'product_sell' => $product_sell,
            'users'=>$users,
            'reviews' => $reviews

        ]);
    }

    public function suppliermarketvetpdetails(Request $request)
    {
        $id = $request->get('id');
        $vet = Vet::where('id', $id)->first();
        //dd($vet);
        $reviews = Review::where('reviews.vet_id', $vet->id)
        ->leftJoin('users', 'reviews.user_id', '=', 'users.id')
        ->get();
        $users = User::where('id',Auth::user()->id)
        ->get();
        return view('supplier_view/supplier_marketvetpdetails',[
            'vet' => $vet,
            'users'=>$users,
            'reviews'=>$reviews

        ]);
    }
    public function supplierreview(Request $request)
    {
        $product_id =$request->get('product_id');
        $review = $request->get('review');
        $reviews = new Review;
        $reviews->user_id = Auth::user()->id;
        $reviews->product_id = $product_id;
        $reviews->review = $review;
        $reviews->save();

        return redirect(route("suppliermarketpdetails.suppliermarketpdetails", ['id' => $product_id]));
    }

    public function suppliervetreview(Request $request)
    {
        $vet_id =$request->get('vet_id');
        $review = $request->get('review');
        $reviews = new Review;
        $reviews->user_id = Auth::user()->id;
        $reviews->vet_id = $vet_id;
        $reviews->review = $review;
        $reviews->save();

        return redirect(route("suppliermarketpdetails.suppliermarketvetpdetails", ['id' => $vet_id]));
    }

}
