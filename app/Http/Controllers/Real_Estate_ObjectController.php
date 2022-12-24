<?php

    namespace App\Http\Controllers;

    use \App\Models\RealEstateObjectImage;
    use App\Models\Real_Estate_Object;
    use Illuminate\Http\Request;
    use Illuminate\Validation\Rule;

    class Real_Estate_ObjectController extends Controller
    {
        //

        // show all real_estate_objects
        public function index()
        {
            return view('properties.index', [
                'realEstateObjects' => Real_Estate_Object::latest()
                    ->filter(request(['tag', 'search']))->get()

            ]);
        }

        // show single real_estate_object
        public function show(Real_Estate_Object $realEstateObject)
        {
            return view('properties.show', [
                'realEstateObject' => $realEstateObject,
                'images' => $realEstateObject->realEstateObjectImages()->latest()
            ]);
        }

        // show create form
        public function create()
        {
            return view('properties.create');
        }

        // edit the single real_estate_object
        public function edit(Real_Estate_Object $realEstateObject)
        {
            return view('properties.edit', ['realEstateObject' => $realEstateObject]);
        }

        // store real_estate_object data
        public function store(Request $request)
        {
            $formFields = $request->validate([
                'object_title' => 'required',
                'tags' => 'nullable',
                'images.*' => 'nullable|image|mimes:jpg,webp,png,jpeg,gif,svg|dimensions:min_width=100,min_height=100',
                'hasImages' => 'nullable',
                'offer_type' => 'required', // sale, rent or sale/rent
                'object_type' => 'required', // land, apartment, realEstate
                'object_details' => 'nullable',
                'location' => 'nullable|max:255',
                'maps_url' => 'nullable',
                'area_size' => 'nullable',
                'object_status' => 'nullable',
                'object_price' => 'nullable',
                'object_price_POA' => 'nullable',
                'numBedrooms' => 'nullable',
                'numBathrooms' => 'nullable',
                'airco' => 'nullable',
                'object_address_street' => 'nullable',
                'object_address_no' => 'nullable',
                'features' => 'nullable',
                'description' => 'nullable'
            ]);

            $formFields['user_id'] = auth()->id();

            $fileArray = [];
            $a = [];
            if ($request->file('images')) { // store the (first element of) uploaded image(s)
                $fileArray = $request->allFiles();
                $a = array_shift($fileArray);
//            if(count($a) > 1) {
//                $b = array_shift($a);
//                dd(array_shift($a)->getClientOriginalName());
                $file = array_shift($a); // chop first element off, regardless of nIndex
                $fileName = time() . rand(1, 99) . '.' . $file->extension();
                $file->move(public_path('uploads'), $fileName);
                $formFields['images'] = 'uploads/'.$fileName;

//            } else {
//                $formFields['images'] = $request->file('images')[0]->getClientOriginalName();
//                $file =
//                $fileName = time().rand(1,99).'.'.$a[0]->extension();
//                $a[0]->move(public_path('uploads'), $fileName);
//            }
            }

            $formfields['real__estate__object_id'] = Real_Estate_Object::create($formFields)->id;

            $data = [];

            if (count($a) > 0) { // more than one image has been uploaded
                for ($i = -1; $i < count($a); $i++) {
                    if($i === -1) {
                        $formfields['url'] = $formFields['images'];
                        continue;
                    }

                    $fileName = time() . rand(1, 99) . '.' . $a[$i]->extension();
                    $a[$i]->move(public_path('uploads'), $fileName);
                    $formfields['url'] = 'uploads/'.$fileName;

                    RealEstateObjectImage::create($formfields);
                    $data[]['name'] = $fileName;
                }
            } else {
                $formfields['url'] = $formFields['images'];
                RealEstateObjectImage::create($formfields);
            }

            return redirect('/')->with('message', 'Property created successfully!');

        }


        public function grid(Real_Estate_Object $realEstateObject) {
            return view('properties.grid', [
                'realEstateObjects' => Real_Estate_Object::latest()->get()
            ]);
        }
        public function manage(Real_Estate_Object $realEstateObjects)
        {
            // pass anything to the view! [... => ... ,... => ...]
            return view('properties.manage', [
                'realEstateObjects' => auth()->user()->real_estate_objects()->get()
            ]);
        }

        // update property
        public function update(Request $request, Real_Estate_Object $realEstateObject)
        {
            $formFields = $request->validate([
                'object_title' => 'required',
                'tags' => 'nullable',
                'images.*' => 'image|mimes:jpg,png,jpeg,gif,webp,svg|dimensions:min_width=100,min_height=100',
                'hasImages' => 'nullable',
                'offer_type' => 'required', // sale, rent or sale/rent
                'object_type' => 'required', // land, apartment, realEstate
                'object_details' => 'nullable',
                'location' => 'nullable|max:255',
                'maps_url' => 'nullable',
                'area_size' => 'nullable',
                'object_status' => 'nullable',
                'object_price' => 'nullable',
                'object_price_POA' => 'nullable',
                'numBedrooms' => 'nullable',
                'numBathrooms' => 'nullable',
                'airco' => 'nullable',
                'object_address_street' => 'nullable',
                'object_address_no' => 'nullable',
                'features' => 'nullable',
                'description' => 'nullable'
            ]);

            $formFields['user_id'] = auth()->id();

            $fileArray = [];
            $a = [];
            if ($request->file('images')) { // store the (first element of) uploaded image(s)
                $fileArray = $request->allFiles();
                $a = array_shift($fileArray);
//            if(count($a) > 1) {
//                $b = array_shift($a);
//                dd(array_shift($a)->getClientOriginalName());
                $file = array_shift($a); // chop first element off, regardless of nIndex
                $fileName = time() . rand(1, 99) . '.' . $file->extension();
                $file->move(public_path('uploads'), $fileName);
                $formFields['images'] = 'uploads/'.$fileName;

//            } else {
//                $formFields['images'] = $request->file('images')[0]->getClientOriginalName();
//                $file =
//                $fileName = time().rand(1,99).'.'.$a[0]->extension();
//                $a[0]->move(public_path('uploads'), $fileName);
//            }
            }

            $formfields['real__estate__object_id'] = $realEstateObject->id;

            $data = [];

            if (count($a) > 0) { // more than one image has been uploaded
                for ($i = 0; $i < count($a); $i++) {
                    $fileName = time() . rand(1, 99) . '.' . $a[$i]->extension();
                    $a[$i]->move(public_path('uploads'), $fileName);
                    $formfields['url'] = 'uploads/'.$fileName;

                    RealEstateObjectImage::create($formfields);

                    $data[]['name'] = $fileName;
                }
            }

            $realEstateObject->update($formFields);

            return redirect('/properties/manage')->with('message', "Property Updated Successfully!");


        }

        // DELETE real_estate_object
        public function destroy(Real_Estate_Object $realEstateObject)
        {
            $realEstateObject->delete();
            $realEstateObject->realEstateObjectImages()->delete();
            return redirect('/properties/manage')->with('message', 'Property deleted successfully');
        }


    }
