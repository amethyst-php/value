<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\ValueFaker;
use Amethyst\Managers\ValueManager;
use Amethyst\Tests\BaseTest;
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
