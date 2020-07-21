<?php

namespace Carlosbinoti\primeiropacote\Providers;
use Illuminate\Support\ServiceProvider;
class PrimeiroPacoteProvider extends ServiceProvider 
{
    public function boot()
    {
      $this->loadRoutesFrom(dirname( dirname(__FILE__) ).'/routes/web.php');
    }
    public function register()
    {
    }
}