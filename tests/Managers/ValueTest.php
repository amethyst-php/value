<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\ValueFaker;
use Railken\Amethyst\Managers\ValueManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class ValueTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = ValueManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = ValueFaker::class;
}
