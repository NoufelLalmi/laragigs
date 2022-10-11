<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //Get and Show all Listings
    public function index()
    {
        return view('listings.index' , [
            'listings' => Listing::latest()->filter(request(['tag' , 'search']))->get()
        ]);
    }
    //Get and Show all Listings
    public function show(Listing $listing)
    {
        return view('listings.show' , [
            'listing' => $listing
        ]);
    }
}

