<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            # Admin
            Route::middleware('web')->prefix('/admin')->name('admin.')->group(function () {
                Route::namespace($this->namespace)
                    ->group(base_path('routes/web/admin/index.php'));

                Route::prefix('/users')->name('users.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/users.php'));
                });

                #dashboard
                Route::group(['middleware' => ['permission:Tổng quan']], function () {
                    Route::prefix('/tong-quan')->name('dashboard.')->group(function () {
                        Route::namespace($this->namespace)
                            ->group(base_path('routes/web/admin/dashboard.php'));
                    });
                });

                #order
                Route::prefix('/don-hang')->name('order.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/order.php'));
                });

                #product
                Route::prefix('/san-pham')->name('product.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/product.php'));
                });

                #origin
                Route::prefix('/xuat-xu')->name('origin.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/origin.php'));
                });

                #configuration
                Route::prefix('/cau-hinh')->name('configuration.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/configuration.php'));
                });

                #feature
                Route::prefix('/tinh-nang')->name('feature.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/feature.php'));
                });

                #comment
                Route::prefix('/danh-gia')->name('comment.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/comment.php'));
                });

                #parentCategory
                Route::prefix('/danh-muc-chinh')->name('parentCategory.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/parentCategory.php'));
                });

                #firstSubCategory
                Route::prefix('/danh-muc-phu-1')->name('firstSubCategory.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/firstSubCategory.php'));
                });

                #secondSubCategory
                Route::prefix('/danh-muc-phu-2')->name('secondSubCategory.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/secondSubCategory.php'));
                });

                #brand
                Route::prefix('/thuong-hieu')->name('brand.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/brand.php'));
                });

                #introduction
                Route::prefix('/bai-gioi-thieu')->name('introduction.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/introduction.php'));
                });

                #blog
                Route::prefix('/danh-muc-bai-viet')->name('blog.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/blog.php'));
                });

                #post
                Route::prefix('/bai-viet')->name('post.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/post.php'));
                });

                #headerPost
                Route::prefix('/bai-viet-header')->name('headerPost.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/headerPost.php'));
                });

                #slider
                Route::prefix('/slider')->name('slider.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/slider.php'));
                });

                #parentCategorySlider
                Route::prefix('/slider-cua-danh-muc-chinh')->name('parentCategorySlider.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/parentCategorySlider.php'));
                });

                #page
                Route::prefix('/trang-thong-tin')->name('page.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/page.php'));
                });

                #company
                Route::prefix('/cua-hang')->name('company.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/company.php'));
                });

                #branch
                Route::prefix('/chi-nhanh')->name('branch.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/branch.php'));
                });

                #consultant
                Route::prefix('/ho-tro-tu-van')->name('consultant.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/consultant.php'));
                });

                #customer
                Route::prefix('/khach-hang')->name('customer.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/customer.php'));
                });

                #orderStatus
                Route::prefix('/tinh-trang-don-hang')->name('orderStatus.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/orderStatus.php'));
                });

                #shippingStatus
                Route::prefix('/tinh-trang-giao-hang')->name('shippingStatus.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/shippingStatus.php'));
                });

                #staff
                Route::prefix('/thanh-vien')->name('staff.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/staff.php'));
                });

                # permission
                Route::prefix('/phan-quyen')->name('permission.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/permission.php'));
                });

                #package
                Route::prefix('/package')->name('package.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/package.php'));
                });

                #ajax
                Route::prefix('/ajax')->name('ajax.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/admin/ajax.php'));
                });
            });

            # Site
            Route::middleware('web')->prefix('/')->name('site.')->group(function () {
                #home
                Route::namespace($this->namespace)
                    ->group(base_path('routes/web/site/index.php'));

                #search
                Route::prefix('/tim-kiem')->name('search.')->namespace($this->namespace)
                    ->group(base_path('routes/web/site/search.php'));

                #consultant
                Route::name('consultant.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/consultant.php'));
                });

                #contact
                Route::name('contact.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/contact.php'));
                });

                #customer
                Route::name('customer.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/customer.php'));
                });

                #headerPost
                Route::prefix('/trang-thong-tin-noi-bat')->name('headerPost.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/headerPost.php'));
                });

                #page
                Route::prefix('/trang-thong-tin')->name('page.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/page.php'));
                });

                #introduction
                Route::prefix('/gioi-thieu')->name('introduction.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/introduction.php'));
                });

                #cart
                Route::prefix('/gio-hang')->name('cart.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/cart.php'));
                });

                #payment
                Route::name('payment.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/payment.php'));
                });

                #post
                Route::prefix('/bai-viet/{blogSlug}')->name('post.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/post.php'));
                });

                #blog
                Route::prefix('/tin-tuc')->name('blog.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/blog.php'));
                });

                #comment
                Route::prefix('/danh-gia-san-pham')->name('comment.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/comment.php'));
                });

                #parentCategory
                Route::prefix('/{parentCategorySlug}.html')->name('parentCategory.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/parentCategory.php'));
                });

                // #product
                Route::prefix('/san-pham')->name('product.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/product.php'));
                });

                #firstSubCategory
                Route::prefix('/{parentCategorySlug}')->name('firstSubCategory.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/firstSubCategory.php'));
                });

                #secondSubCategory
                Route::prefix('/{parentCategorySlug}/{firstSubCategorySlug}')->name('secondSubCategory.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/secondSubCategory.php'));
                });

                #ajax
                Route::prefix('/ajax')->name('ajax.')->group(function () {
                    Route::namespace($this->namespace)
                        ->group(base_path('routes/web/site/ajax.php'));
                });
            });

            Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
                ->name('ckfinder_connector');

            Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
                ->name('ckfinder_browser');

            //Route::any('/ckfinder/examples/{example?}', '\CKSource\CKFinderBridge\Controller\CKFinderController@examplesAction')
            //    ->name('ckfinder_examples');

            #Email verification
            Route::namespace($this->namespace)
                ->group(base_path('routes/web/site/verify.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}