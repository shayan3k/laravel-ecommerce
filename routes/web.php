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
        use Illuminate\Http\Request;
        use Illuminate\Support\Facades\Auth;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Mail;

        Route::get('/test', function () {


            $user = Auth::user()->isAdmin(); // the user ID to bind the cart contents
            dd($user);

        });

        Route::get('/', function () {

            $featuredProducts = db::table('featured_images')
                ->orderBy('id', 'asc')
                ->take(4)
                ->get();


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


            $intro = DB::table('intro')
                ->first();

            $testimony = DB::table('testimony')
                ->orderBy('id', 'asc')
                ->take(3)
                ->get();

            return view('index')->with(['newArrival' => $newArrival, 'latestProducts' => $latestProducts, 'latestPosts' => $latestPosts, 'featuredProducts' => $featuredProducts, 'intro' => $intro, 'testimony' => $testimony]);
        })->name('index');





        Route::get('/shop/{id}', 'ProductController@single');

        Route::get('/contact', function () {
            return view('contact');
        })->name('contact');

        Route::get('/about', function () {
            return view('about');
        })->name('about');




        Route::get('/contact', function () {
            return view('contact');
        })->name('contact');



        Route::Post('/contact', function (Request $request) {


            Mail::send('emails.template', ['title' => 'Email Title','body'=>'This is the text for body' ], function ($m) {
                $m->from('theApplication@app.com')
                    ->to('shayan3k@gmial.com')
                    ->subject('');
            });
            return view('message')->with(['status'=>'success' , 'msg'=>'Your message has been sent successfully!']);

        });

        Route::get('/product-detail',function(){
            return view('product-detail');
        })->name('product-detail');


        Route::get('/shop','ProductController@shop')->name('shop');
        Route::get('/shop/{query}','ProductController@query')->name('query');


        Route::get('/blog', 'PostController@blog')->name('blog');
        Route::get('/blog/{id}', 'PostController@single')->name('blog-detail');




        Route::group(['middleware' => ['auth']], function () {

            Route::post('shop/cart/{id}', 'CartController@add')->name('cart.add');
            Route::get('cart', 'CartController@show')->name('cart.show');
            Route::get('cart/remove/{id}', 'CartController@destroy')->name('cart.destroy');
            Route::get('cart/clear', 'CartController@clear')->name('cart.clear');


            Route::get('/order-complete', function () {
                return view('order-complete');
            })->name('order-complete');

            Route::get('/checkout', 'CartController@checkout')->name('checkout');

            Route::get('/admin', 'HomeController@admin')->name('admin');


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


        Route::post('/subscription', function () {
            return redirect()->route('index');
        });
