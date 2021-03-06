<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\FirmInterface;
use App\Repositories\FirmRepository;
use App\Repositories\Interfaces\BillDetailInterface;
use App\Repositories\BillDetailRepository;
use App\Repositories\Interfaces\BillInterface;
use App\Repositories\BillRepository;
use App\Repositories\Interfaces\AdminFirmInterface;
use App\Repositories\AdminFirmRepository;
use App\Repositories\Interfaces\UserInterface;
use App\Repositories\UserRepository;
use App\Repositories\Interfaces\ProductInterface;
use App\Repositories\ProductRepository;
use App\Repositories\Interfaces\StateInterface;
use App\Repositories\StateRepository;
use App\Repositories\Interfaces\ChallanInterface;
use App\Repositories\ChallanRepository;
use App\Repositories\Interfaces\ChallanDetailInterface;
use App\Repositories\ChallanDetailRepository;

class CommonServiceProvider extends ServiceProvider{

    public function register(){

        $this->registerFirmRepository();
        $this->registerBillDetailRepository();
        $this->registerBillRepository();
        $this->registerAdminFirmRepository();
        $this->registerUserRepository();
        $this->registerProductRepository();
        $this->registerStateRepository();
        $this->registerChallanRepository();
        $this->registerChallanDetailRepository();
    }

    public function registerFirmRepository(){
        $this->app->bind(FirmInterface::class, FirmRepository::class);
    }

    public function registerBillDetailRepository(){
        $this->app->bind(BillDetailInterface::class, BillDetailRepository::class);
    }

    public function registerBillRepository(){
        $this->app->bind(BillInterface::class, BillRepository::class);
    }

    public function registerAdminFirmRepository(){
        $this->app->bind(AdminFirmInterface::class, AdminFirmRepository::class);
    }

    public function registerUserRepository(){
        $this->app->bind(UserInterface::class, UserRepository::class);
    }

    public function registerProductRepository(){
        $this->app->bind(ProductInterface::class, ProductRepository::class);
    }

    public function registerStateRepository(){
        $this->app->bind(StateInterface::class, StateRepository::class);
    }

    public function registerChallanRepository(){

        $this->app->bind(ChallanInterface::class, ChallanRepository::class);
    }

    public function registerChallanDetailRepository(){
        $this->app->bind(ChallanDetailInterface::class, ChallanDetailRepository::class);
    }
}