<?php

namespace App\Http\Controllers;

use App\Models\listing;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Database\Eloquent\Relations\HasMany;

class ListingController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function testSite()
    {
        return view('testSite');
    }
    public function showListings()
    {
        return view('listings.listings', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }
    public function show(Listing $listing)
    {
        return view('listings.listing', [
            'listing' => $listing
        ]);
    }
    public function createListing()
    {
        return view('listings.createListing', []);
    }
    public function store(Request $request)
    {
        $inputData = $request->validate(
            [
                'title' => 'required',
                'tags' => 'required',
                'companyName' => 'required',
                'location' => 'required',
                'email' => ['required', 'email'],
                'website' => 'required',
                'description' => 'required',
            ]
        );

        if ($request->hasFile('logo')) {
            $inputData['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $inputData['user_id'] = auth()->id();


        Listing::create($inputData);

        return  redirect('/listings')->with('createMessage', 'Listing Added Succesfully!');
    }

    public function edit(Listing $listing)
    {

        return view('listings.edit', ['listing' => $listing]);
    }

    public function update(Request $request, Listing $listing)
    {
        $inputData = $request->validate(
            [
                'title' => 'required',
                'tags' => 'required',
                'companyName' => 'required',
                'location' => 'required',
                'email' => ['required', 'email'],
                'website' => 'required',
                'description' => 'required',
            ]
        );

        if ($request->hasFile('logo')) {
            $inputData['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($inputData);

        return  redirect('/listings/manage')->with('createMessage', 'Listing Updated Succesfully!');
    }
    public function delete(Listing $listing)
    {
        $listing->delete();
        return  redirect('/listings/manage')->with('createMessage', 'Listing deleted Succesfully!');
    }

    public function manageListing()
    {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}
