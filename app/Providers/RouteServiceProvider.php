<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapMunicipalityRoutes();

        $this->mapStudentRoutes();

        $this->mapMemberRoutes();

        $this->mapUserRoutes();

        $this->mapOrderRoutes();

        $this->mapPagesRoutes();

        //
    }

    /**
     * Define the "member" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapMemberRoutes()
    {
        Route::prefix('member')
             ->middleware(['web'])
             ->namespace($this->namespace)
             ->group(base_path('routes/member.php'));
    }

    /**
     * Define the "student" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapStudentRoutes()
    {
        Route::prefix('student')
             ->middleware(['web'])
             ->namespace($this->namespace)
             ->group(base_path('routes/student.php'));
    }

    /**
     * Define the "municipality" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapMunicipalityRoutes()
    {
        Route::prefix('municipality')
             ->middleware(['web'])
             ->namespace($this->namespace)
             ->group(base_path('routes/municipality.php'));
    }


    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
    /**
     * Define the "municipality" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapUserRoutes()
    {
        Route::prefix('user')
             ->middleware(['web'])
             ->namespace($this->namespace)
             ->group(base_path('routes/user.php'));
    }
    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapOrderRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/order.php'));
    }
    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapPagesRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/pages.php'));
    }
}
