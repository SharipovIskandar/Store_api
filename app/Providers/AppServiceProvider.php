<?php

namespace App\Providers;

use App\Services\Income\Contracts\iIncomeService;
use App\Services\Income\IncomeService;
use App\Services\Order\Contracts\iOrderService;
use App\Services\Order\OrderService;
use App\Services\Sale\Contracts\iSaleService;
use App\Services\Sale\SaleService;
use App\Services\Stock\Contracts\iStockService;
use App\Services\Stock\StockService;
use App\Services\User\Contracts\iUserService;
use App\Services\User\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(iIncomeService::class, IncomeService::class);
        $this->app->bind(iStockService::class, StockService::class);
        $this->app->bind(iOrderService::class, OrderService::class);
        $this->app->bind(iSaleService::class, SaleService::class);
        $this->app->bind(iUserService::class, UserService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
