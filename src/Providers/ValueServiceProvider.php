<?php

namespace Amethyst\Providers;

use Illuminate\Support\Facades\Config;
use Amethyst\Common\CommonServiceProvider;

class ValueServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Amethyst\Providers\TaxonomyServiceProvider::class);

        app('amethyst.taxonomy')->add('value.key', Config::get('amethyst.value.data.value.attributes.key.taxonomy'), [
            'basic',
        ]);
    }

    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();
    }
}
