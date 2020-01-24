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



        Route::get('/shop','ProductController@shop')->name('shop');
        Route::get('/shop/{query}','ProductController@query')->name('query');


        Route::get('/blog', 'PostController@blog')->name('blog');
        Route::get('/blog/{id}', 'PostController@single')->name('blog-detail');


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


        Route::post('/subscription', function () {
            return redirect()->route('index');
        });
