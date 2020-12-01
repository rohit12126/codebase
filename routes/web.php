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

Route::group(['middleware' => ['get.menu']], function () {

    Route::get('/admin/login', function () {
        return view('dashboard.auth.login');
    });
    
    Route::get('/admin', function () {
        return view('dashboard.auth.login');
    });

    Route::post('admin/login', 'admin\LoginController@loginSubmit')->name('admin.login.submit');


    Route::group(['middleware' => ['AdminAuth']], function () { //admin must login

        Route::get('admin/logout', 'admin\LoginController@logout')->name('admin.logout');
        
        Route::get('/admin/dashboard', function () {
            return view('dashboard.homepage');
        })->name('admin.dashboard');
        
        Route::get('admin/category', 'admin\CategoryController@index')->name('admin.category');
        Route::post('admin/category', 'admin\CategoryController@addCategory')->name('admin.category');
        Route::get('admin/edit_category/{id?}', 'admin\CategoryController@editCategory');//->name('admin.categoryedit');
        Route::post('admin/edit_category/{id?}', 'admin\CategoryController@editSubmitCategory');//->name('admin.categoryedit');
        Route::get('admin/delete_category/{id?}', 'admin\CategoryController@deleteCategory');

        Route::get('admin/product', 'admin\ProductController@index')->name('admin.product');
        Route::post('admin/product', 'admin\ProductController@addProduct')->name('admin.product');
        Route::get('admin/edit_product/{id?}', 'admin\ProductController@editProduct');
        Route::post('admin/edit_product/{id?}', 'admin\ProductController@editSubmitProduct');
        Route::get('admin/product-list', 'admin\ProductController@productList')->name('admin.product.list');
        Route::post('admin/product-list', 'admin\ProductController@productList')->name('admin.product.list');
        Route::get('admin/delete_product/{id?}', 'admin\ProductController@deleteProduct');

        Route::get('admin/user', 'admin\UserController@index')->name('admin.user');
        Route::post('admin/user', 'admin\UserController@addUser')->name('admin.user');
        Route::get('admin/edit_user/{id?}', 'admin\UserController@editUser'); 
        Route::post('admin/edit_user/{id?}', 'admin\UserController@editSubmitUser');
        Route::get('admin/delete_user/{id?}', 'admin\UserController@deleteUser');
        Route::get('admin/user_login/{id?}', 'admin\UserController@proxyLogin');

        Route::get('admin/change-password', 'admin\UserController@changePassword')->name('admin.change.password'); 
        Route::post('admin/change-password', 'admin\UserController@changePassword')->name('admin.change.password');
        
        Route::get('admin/order', 'admin\OrderController@index')->name('admin.order');
        Route::post('admin/order', 'admin\OrderController@index')->name('admin.order');
        Route::get('admin/order_details/{order_no?}', 'admin\OrderController@orderDetails');
        Route::post('admin/order_details/{order_no?}', 'admin\OrderController@orderStatusChange');
        
        Route::get('admin/order_email', 'admin\OrderController@email')->name('admin.test.email');

        Route::get('admin/blog-category', 'admin\BlogCategoryController@index')->name('admin.blog.category');
        Route::post('admin/blog-category', 'admin\BlogCategoryController@addCategory')->name('admin.blog.category');
        Route::get('admin/blog_edit_category/{id?}', 'admin\BlogCategoryController@editCategory');//->name('admin.categoryedit');
        Route::post('admin/blog_edit_category/{id?}', 'admin\BlogCategoryController@editSubmitCategory');//->name('admin.categoryedit');
        Route::get('admin/blog_delete_category/{id?}', 'admin\BlogCategoryController@deleteCategory');

        Route::get('admin/blog', 'admin\BlogController@index')->name('admin.blog');
        Route::post('admin/blog', 'admin\BlogController@addBlog')->name('admin.blog');
        Route::get('admin/edit_blog/{id?}', 'admin\BlogController@editBlog');
        Route::post('admin/edit_blog/{id?}', 'admin\BlogController@editSubmitBlog');
        Route::get('admin/blog-list', 'admin\BlogController@blogList')->name('admin.blog.list');
        Route::post('admin/blog-list', 'admin\BlogController@blogList')->name('admin.blog.list');
        Route::get('admin/delete_blog/{id?}', 'admin\BlogController@deleteBlog');
        Route::get('/admin/reviews' , 'admin\ReviewController@allActive')->name('admin.aprooved');
        Route::get('/admin/new/reviews' , 'admin\ReviewController@allInActive')->name('admin.toaprooved');
        Route::get('admin/review/delete/{id?}', 'admin\ReviewController@delete');
        Route::get('admin/review/approv/{id?}', 'admin\ReviewController@approv');
        Route::get('admin/review/disapprov/{id?}', 'admin\ReviewController@disapprov');
        Route::get('admin/faq','admin\FaqController@index')->name('admin.faq');
        Route::post('admin/faq','admin\FaqController@addFaq')->name('admin.faq');
        Route::post('admin/faq/category','admin\FaqController@addFaqCategory')->name('admin.faq.category');
        Route::get('admin/faq-list', 'admin\FaqController@faqList')->name('admin.faq.list');
        Route::get('admin/delete_faq/{id?}', 'admin\FaqController@deleteFaq');
        Route::get('admin/edit_faq/{id?}', 'admin\FaqController@editFaq');
        Route::post('admin/edit_faq/{id?}', 'admin\FaqController@editSubmitFaq');

        Route::get('admin/faq-category', 'admin\FaqCategoryController@index')->name('admin.faq.category');
        Route::post('admin/faq-category', 'admin\FaqCategoryController@addCategory')->name('admin.faq.category');
        Route::get('admin/faq_edit_category/{id?}', 'admin\FaqCategoryController@editCategory');
        Route::post('admin/faq_edit_category/{id?}', 'admin\FaqCategoryController@editSubmitCategory');
        Route::get('admin/faq_delete_category/{id?}', 'admin\FaqCategoryController@deleteCategory');

        Route::get('admin/cms', 'admin\CMSController@index')->name('admin.cms');
        Route::post('admin/cms', 'admin\CMSController@addPage')->name('admin.cms');
        Route::get('admin/edit_cms/{id?}', 'admin\CMSController@editPage');
        Route::post('admin/edit_cms/{id?}', 'admin\CMSController@editSubmitPage');
        Route::get('admin/page-list', 'admin\CMSController@pageList')->name('admin.page.list');
        Route::post('admin/page-list', 'admin\CMSController@pageList')->name('admin.page.list');
        Route::get('admin/delete_page/{id?}', 'admin\CMSController@deletePage');
        Route::get('admin/enquiries', 'admin\EnquiryController@list')->name('admin.enquiries');
        Route::get('admin/update-enquiry/{id?}', 'admin\EnquiryController@contected');

    });

    Route::group(['middleware' => ['role:user']], function () {
        Route::get('/colors', function () {
            return view('dashboard.colors');
        });
        Route::get('/typography', function () {
            return view('dashboard.typography');
        });
        Route::get('/charts', function () {
            return view('dashboard.charts');
        });
        Route::get('/widgets', function () {
            return view('dashboard.widgets');
        });
        Route::get('/404', function () {
            return view('dashboard.404');
        });
        Route::get('/500', function () {
            return view('dashboard.500');
        });
        Route::prefix('base')->group(function () {
            Route::get('/breadcrumb', function () {
                return view('dashboard.base.breadcrumb');
            });
            Route::get('/cards', function () {
                return view('dashboard.base.cards');
            });
            Route::get('/carousel', function () {
                return view('dashboard.base.carousel');
            });
            Route::get('/collapse', function () {
                return view('dashboard.base.collapse');
            });

            Route::get('/forms', function () {
                return view('dashboard.base.forms');
            });
            Route::get('/jumbotron', function () {
                return view('dashboard.base.jumbotron');
            });
            Route::get('/list-group', function () {
                return view('dashboard.base.list-group');
            });
            Route::get('/navs', function () {
                return view('dashboard.base.navs');
            });

            Route::get('/pagination', function () {
                return view('dashboard.base.pagination');
            });
            Route::get('/popovers', function () {
                return view('dashboard.base.popovers');
            });
            Route::get('/progress', function () {
                return view('dashboard.base.progress');
            });
            Route::get('/scrollspy', function () {
                return view('dashboard.base.scrollspy');
            });

            Route::get('/switches', function () {
                return view('dashboard.base.switches');
            });
            Route::get('/tables', function () {
                return view('dashboard.base.tables');
            });
            Route::get('/tabs', function () {
                return view('dashboard.base.tabs');
            });
            Route::get('/tooltips', function () {
                return view('dashboard.base.tooltips');
            });
        });
        Route::prefix('buttons')->group(function () {
            Route::get('/buttons', function () {
                return view('dashboard.buttons.buttons');
            });
            Route::get('/button-group', function () {
                return view('dashboard.buttons.button-group');
            });
            Route::get('/dropdowns', function () {
                return view('dashboard.buttons.dropdowns');
            });
            Route::get('/brand-buttons', function () {
                return view('dashboard.buttons.brand-buttons');
            });
        });
        Route::prefix('icon')->group(function () {  // word: "icons" - not working as part of adress
            Route::get('/coreui-icons', function () {
                return view('dashboard.icons.coreui-icons');
            });
            Route::get('/flags', function () {
                return view('dashboard.icons.flags');
            });
            Route::get('/brands', function () {
                return view('dashboard.icons.brands');
            });
        });
        Route::prefix('notifications')->group(function () {
            Route::get('/alerts', function () {
                return view('dashboard.notifications.alerts');
            });
            Route::get('/badge', function () {
                return view('dashboard.notifications.badge');
            });
            Route::get('/modals', function () {
                return view('dashboard.notifications.modals');
            });
        });
        Route::resource('notes', 'NotesController');
    });
    Auth::routes();

    Route::resource('resource/{table}/resource', 'ResourceController')->names([
        'index'     => 'resource.index',
        'create'    => 'resource.create',
        'store'     => 'resource.store',
        'show'      => 'resource.show',
        'edit'      => 'resource.edit',
        'update'    => 'resource.update',
        'destroy'   => 'resource.destroy'
    ]);

    Route::group(['middleware' => ['role:admin']], function () {
        Route::resource('bread',  'BreadController');   //create BREAD (resource)
        Route::resource('users',        'UsersController')->except(['create', 'store']);
        Route::resource('roles',        'RolesController');
        Route::resource('mail',        'MailController');
        Route::get('prepareSend/{id}',        'MailController@prepareSend')->name('prepareSend');
        Route::post('mailSend/{id}',        'MailController@send')->name('mailSend');
        Route::get('/roles/move/move-up',      'RolesController@moveUp')->name('roles.up');
        Route::get('/roles/move/move-down',    'RolesController@moveDown')->name('roles.down');
        Route::prefix('menu/element')->group(function () {
            Route::get('/',             'MenuElementController@index')->name('menu.index');
            Route::get('/move-up',      'MenuElementController@moveUp')->name('menu.up');
            Route::get('/move-down',    'MenuElementController@moveDown')->name('menu.down');
            Route::get('/create',       'MenuElementController@create')->name('menu.create');
            Route::post('/store',       'MenuElementController@store')->name('menu.store');
            Route::get('/get-parents',  'MenuElementController@getParents');
            Route::get('/edit',         'MenuElementController@edit')->name('menu.edit');
            Route::post('/update',      'MenuElementController@update')->name('menu.update');
            Route::get('/show',         'MenuElementController@show')->name('menu.show');
            Route::get('/delete',       'MenuElementController@delete')->name('menu.delete');
        });
        Route::prefix('menu/menu')->group(function () {
            Route::get('/',         'MenuController@index')->name('menu.menu.index');
            Route::get('/create',   'MenuController@create')->name('menu.menu.create');
            Route::post('/store',   'MenuController@store')->name('menu.menu.store');
            Route::get('/edit',     'MenuController@edit')->name('menu.menu.edit');
            Route::post('/update',  'MenuController@update')->name('menu.menu.update');
            Route::get('/delete',   'MenuController@delete')->name('menu.menu.delete');
        });
        Route::prefix('media')->group(function () {
            Route::get('/',                 'MediaController@index')->name('media.folder.index');
            Route::get('/folder/store',     'MediaController@folderAdd')->name('media.folder.add');
            Route::post('/folder/update',   'MediaController@folderUpdate')->name('media.folder.update');
            Route::get('/folder',           'MediaController@folder')->name('media.folder');
            Route::post('/folder/move',     'MediaController@folderMove')->name('media.folder.move');
            Route::post('/folder/delete',   'MediaController@folderDelete')->name('media.folder.delete');;

            Route::post('/file/store',      'MediaController@fileAdd')->name('media.file.add');
            Route::get('/file',             'MediaController@file');
            Route::post('/file/delete',     'MediaController@fileDelete')->name('media.file.delete');
            Route::post('/file/update',     'MediaController@fileUpdate')->name('media.file.update');
            Route::post('/file/move',       'MediaController@fileMove')->name('media.file.move');
            Route::post('/file/cropp',      'MediaController@cropp');
            Route::get('/file/copy',        'MediaController@fileCopy')->name('media.file.copy');
        });
    });
});
/*user dashboard Routes*/
Route::prefix('account')->group(function () {
Route::get('/profile',                 'ProfileController@index')->name('profile');
Route::get('/',                 'ProfileController@account')->name('account');
Route::post('/update',                 'ProfileController@update')->name('account.update');
Route::get('/orderdetails/{id}' ,'ProfileController@orderDetails')->name('orderdetails');
});
Route::get('stripe', 'StripePaymentController@stripe')->name('stripe');
Route::Post('/user/credentials', 'ProfileController@postCredentials');
/* social login*/
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');

/* Product Routes */
Route::get('product/', 'ProductController@index')->name('product.list');
Route::get('product/detail','ProductController@detail')->name('product.detail');

/* Blog Routes */
Route::get('blog/', 'BlogController@index')->name('blog.list');
Route::get('blog/detail','BlogController@detail')->name('blog.detail');

Route::get('home/', 'HomeController@home')->name('home');
Route::get('/', 'HomeController@home')->name('home');
Route::get('faq/', 'HomeController@faq')->name('faq');
Route::get('about-us/', 'HomeController@aboutUs')->name('about-us');

/* Cart Routes */
Route::get('cart/','CartController@index')->name('cart');
Route::post('cart/add-cart','CartController@addToCart')->name('cart.addCart');
Route::post('/cart/remove-from-cart','CartController@removeFromCart')->name('cart.removeFromCart');
Route::post('/cart/update-cart','CartController@updateCart')->name('cart.updateCart');
Route::post('/cart/remove-product','CartController@removeProduct')->name('cart.removeProduct');

/* Checkout Routes */
Route::get('checkout/address/','CartController@getAddresses')->name('address.get');
Route::post('checkout','CartController@addAddress')->name('address.save');
Route::get('order/add-order','OrderController@addOrder')->name('order.addOrder');

/*Paypal Payment Routes*/
Route::get('/paywithpaypal','PayPalController@payWithPaypal')->name('addmoney.paywithpaypal');
Route::post('/paypal','PayPalController@postPaymentWithpaypal')->name('addmoney.paypal');
Route::get('/paypal', 'PayPalController@getPaymentStatus')->name('payment.status');

/*Rating Routes*/
Route::post('/submit/review', 'ProductController@rating');
/*Contact us Routes*/
Route::get('/contact-us', 'admin\EnquiryController@index');
Route::post('/contact-us/store', 'admin\EnquiryController@submit')->name('contact.store');


