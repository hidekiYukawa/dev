<?php

    use App\Http\Controllers\ListingController;
    use App\Http\Controllers\Real_Estate_ObjectController;
    use App\Http\Controllers\UserController;
    use App\Models\Listing;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

# send a GET request to '/' and return a view object from welcome
# view can have an(y) (JSON format/multidimensional) array of any data you want ['key' => 'value']

# COMMON RESOURCE ROUTES:
# index - show all listings
# show - show single listing
# create - show form to create new listing
# store - store new listing
# edit - show form to edit listing
# update - update listing
# destroy - delete listing

    Route::get('/', [Real_Estate_ObjectController::class, 'index']);
// show create form
    Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');
// carry out the store from the create form action
    Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');
// show edit form
    Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
// carry out the update from the edit form action
    Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');
// delete listing
    Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');
// manage listings that belong to user (or user_role)
    Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');
// THIS ONE NEEDS TO BE THE LAST ONE
// show single listing
    Route::get('/listings/{listing}', [ListingController::class, 'show']);

// show the register/create form
    Route::get('/register', [UserController::class, 'create'])->middleware('guest');
// create new user
    Route::post('/users', [UserController::class, 'store']);
// log user out
    Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
// show login form
    Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
// login user
    Route::post('/users/authenticate', [UserController::class, 'authenticate']);


// show all properties
    Route::get('/properties', [Real_Estate_ObjectController::class, 'index']);

// show create form
    Route::get('/properties/create', [Real_Estate_ObjectController::class, 'create']);

// carry out the store from the create form action
    Route::post('/properties', [Real_Estate_ObjectController::class, 'store'])
        ->middleware('auth');

// show edit form
    Route::get('/properties/{real_estate_object}/edit', [Real_Estate_ObjectController::class, 'edit'])
        ->middleware('auth');

// carry out the update from the edit form action
    Route::put('/properties/{real_estate_object}', [Real_Estate_ObjectController::class, 'update'])
        ->middleware('auth');

// delete property
    Route::delete('/properties/{real_estate_object}', [Real_Estate_ObjectController::class, 'destroy'])
        ->middleware('auth');

// manage real_estate_objects that belong to user (or user_role)
    Route::get('/properties/manage', [Real_Estate_ObjectController::class, 'manage'])
        ->middleware('auth');
    // open property grid
    Route::get('/properties/grid', [Real_Estate_ObjectController::class, 'grid']);

// TODO: CREATE MANAGE_IMAGES for managing the images of single object
// THIS ONE NEEDS TO BE THE LAST ONE
// show single property
    Route::get('/properties/{real_estate_object}', [Real_Estate_ObjectController::class, 'show']);

    // Route::get('/', function () {
    // return view('listings', [
    // 'heading' => 'Latest Real Estate',
    // 'listings' => Listing::all()
    // 'listings' => [
    //     [
    //         'id' => 1,
    //         'title' => 'Listing One',
    //         'description' =>
    //         'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?'
    //     ],
    //     [
    //         'id' => 2,
    //         'title' => 'Listing Two',
    //         'description' =>
    //         'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?'
    //     ],
    //     [
    //         'id' => 3,
    //         'title' => 'Listing Three',
    //         'description' =>
    //         'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.'
    //     ],
    //     [
    //         'id' => 4,
    //         'title' => 'Listing Four',
    //         'description' =>
    //         'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.'
    //     ]
    // ]
    // ]);
// });

// Route::get('/listings/{id}', function($id) { # wildcard not needed because
    # of Eloquent Model can be parsed alike underneath:
    // Route::get('/listings/{listing}', function(Listing $listing) {
    // return view('listing', [
    // 'listing' => $listing
    // ]);

    // $listing = Listing::find($id);
    // dd($id);
    // dd(Listing::find($id));

    // if ($listing) {

    // }   else {
    // abort('404');
    // }

// });


    Route::get('/hello', function () {
        return response('<h1>Hello World!</h1>', 200)->header('Content-Type', 'text/plain')->header('key', 'value');
    });

# use wildcard {id} which whill get parsed 'automatically'
// todo: find out where and how it is parsed - Route?
# pass any regular expression as a condition for the response wildcarded input param
    Route::get('/posts/{id}', function ($id) {
        // ddd($id);
        // return response('Post ' . $id);
// })->where('id', '[0-9]+');
    });

# output any information  - e.g. from Request $request -- dieAndDump()
# for instance from the URI: /search?name=brad&city=boston
# access any parameter directly with $request->PARAMETER_NAME
    Route::get('/search', function (Request $request) {
        // dd($request->name . '' . $request->city);
        return ($request->name . ' ' . $request->city);
    });

