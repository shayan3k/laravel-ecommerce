        <?php

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

        use App\Post;
        use App\Product;
        use App\User;
        use Illuminate\Support\Facades\Auth;


        Route::get('/test', function () {


            // $user = User::find(Auth::id());

            // $user->posts()->create([

            //     'title' => 'Blog Post 1',
            //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            //     'active' => '1',
            //     'thumbnail' => 'blog-1.jpg',
            //     'created_at' => now(),
            //     'updated_at' => now(),

            // ]);


            // $product = Product::find(1);

            // $product->tags()->create([
            //     'name' => 'newTag'
            // ]);


            $user = User::find(1);
            $product = Product::find(1);
            $user->products()->attach($product);
        });



        Route::get('/', function () {
            return redirect()->route('index');
        });

        Route::get('/index', function () {

            $newArrival = Product::where('active', 1)
                ->orderBy('id', 'desc')
                ->take(4)
                ->get();

            $latestProducts = Product::where('active', 1)
                ->orderBy('id', 'desc')
                ->take(8)
                ->get();

            $latestPosts = Post::where('active', 1)
                ->orderBy('id', 'asc')
                ->take(3)
                ->get();

            return view('index')->with(['newArrival' => $newArrival, 'latestProducts' => $latestProducts, 'latestPosts' => $latestPosts]);
        })->name('index');

        Route::get('/shop', function () {
            return view('shop');
        })->name('shop');

        Route::get('/product-detail', function () {
            return view('product-detail');
        })->name('product-detail');

        Route::get('/contact', function () {
            return view('contact');
        })->name('contact');

        Route::get('/about', function () {
            return view('about');
        })->name('about');

        Route::get('/blog', function () {
            return view('blog');
        })->name('blog');


        Route::group(['middleware' => ['auth']], function () {

            Route::get('/order-complete', function () {
                return view('order-complete');
            })->name('order-complete');

            Route::get('/checkout', function () {
                return view('checkout');
            })->name('checkout');

            Route::get('/cart', function () {
                return view('cart');
            })->name('cart');

            Route::get('/add-to-wishlist', function () {
                return view('add-to-wishlist');
            })->name('add-to-wishlist');
        });



        // Authentication Routes...
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        Route::post('login', 'Auth\LoginController@login');
        Route::post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');;



        Route::get('password/confirm', function () {
            return view('auth.passwords.confirm');
        });
        Route::post('password/confirm', function () {
            return view('auth.passwords.confirm');
        })->name('password.confirm');



        Route::get('password/verify', function () {
            return view('auth.verify
            ');
        });
        Route::post('password/verify', function () {
            return view('auth.verify
            ');
        })->name('verification.resend');
