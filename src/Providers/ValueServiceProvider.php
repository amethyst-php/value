<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Common\CommonServiceProvider;

class ValueServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Railken\Amethyst\Providers\TaxonomyServiceProvider::class);

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
