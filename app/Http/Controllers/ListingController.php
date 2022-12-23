<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // show all listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()
                ->filter(request(['tag', 'search']))
                ->get()
            //->paginate(6) // paginate takes in a number, which equals number you'd like t o have on page
        ]);
    }

    // show single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // show create form
    public function create() {
        return view('listings.create');
    }

    // edit the single listing
    public function edit(Listing $listing)
    {
        // dd($listing);
        return view('listings.edit', ['listing' => $listing]);
    }

    // store listing data
    public function store(Request $request) {
        // dd($request->all()); # check the form fields

        # todo: study the validate and Rule function class resp.
        $formfields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],# pass an array of rules...
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        $data = [];
        if($request->file('image')) {

            foreach($request->file('image') as $key => $file) {
                // $name = $file->getClientOriginalName();
                $fileName = time().rand(1,99).'.'.$file->extension();
                $file->move(public_path('uploads'), $fileName);
                $data[]['name'] = $fileName;
            }
        }

        // dd($data);
        $imagesString = '';
        foreach ($data as $key => $file) {
            // dd($file);
            // dd(count($data));
            $imagesString .= $file['name'] . ',';
        }

        $imagesString = rtrim($imagesString, ",");
        $formfields['image'] = $imagesString;

        $formfields['user_id'] = auth()->id();
        // dd(explode(',', $imagesString));

        Listing::create($formfields); // use create function from Model to create in DB!

        return redirect('/')->with('message', 'Listing created successfully!');

    }

    public function manage() {
        // pass anything to the view! [... => ... ,... => ...]
        return view('listings.manage', [
            'listings' => auth()->user()->listings()->get()
        ]);
    }

    // UPDATE
    public function update(Request $request, Listing $listing) {
        // dd($request->all()); # check the form fields

        # todo: study the validate and Rule function class resp.
        $formfields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        $data = [];
        if($request->file('image')) {

            foreach($request->file('image') as $key => $file) {
                // $name = $file->getClientOriginalName();
                $fileName = time().rand(1,99).'.'.$file->extension();
                $file->move(public_path('uploads'), $fileName);
                $data[]['name'] = $fileName;
            }
        }

        // dd($data);
        $imagesString = '';
        foreach ($data as $key => $file) {
            // dd($file);
            // dd(count($data));
            $imagesString .= $file['name'] . ',';
        }

        if ($imagesString != '') {
            $imagesString = rtrim($imagesString, ",");
            $formfields['image'] = $imagesString ?? $listing->image;
        }

        // dd(explode(',', $imagesString));

        $listing->update($formfields); // use create function from Model to create in DB!

        // return redirect('/listings/{$listing}')->with('message', 'Listing updated successfully!');
        return back()->with('message', "Listing Updated Successfully!");
    }


    // DELETE listing
    public function destroy(Listing $listing) {
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }


}
