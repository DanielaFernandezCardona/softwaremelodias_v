<?php

namespace App\Providers;
//Si no se agrega este comando, las migraciones no funcionan
//porque no encuentran el esquema.
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      //Laravel 5.4 hizo un cambio en el conjunto de caracteres de base de datos
      //predeterminado, y ahora es utf8mb4, que incluye soporte para almacenar
      //emojis. Esto sólo afecta a las nuevas aplicaciones y mientras que estés
      //ejecutando MySQL v5.7.7 o superior no necesitas hacer nada.
      Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
