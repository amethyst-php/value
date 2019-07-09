<?php

namespace Amethyst\Fakers;

use Faker\Factory;
use Illuminate\Support\Facades\Config;
use Railken\Bag;
use Railken\Lem\Faker;

class ValueFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('key', TaxonomyFaker::make()->parameters()->toArray());
        $bag->set('key.parent.name', Config::get('amethyst.value.data.value.attributes.key.taxonomy'));
        $bag->set('valuable_type', 'foo');
        $bag->set('valuable', FooFaker::make()->parameters()->toArray());
        $bag->set('value', $faker->name);

        return $bag;
    }
}
