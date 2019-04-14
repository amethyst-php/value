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

        \Illuminate\Database\Eloquent\Builder::macro('values', function (): MorphMany {
            return app('amethyst')->createMacroMorphRelation($this, \Railken\Amethyst\Models\Value::class, 'values', 'valuable');
        });

        app('amethyst.taxonomy')->add('value.key', Config::get('amethyst.value.data.value.attributes.key.taxonomy'), [
            'basic',
        ]);
    }
}
