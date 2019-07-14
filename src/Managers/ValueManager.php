<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Value newEntity()
 * @method \Amethyst\Schemas\ValueSchema getSchema()
 * @method \Amethyst\Repositories\ValueRepository getRepository()
 * @method \Amethyst\Serializers\ValueSerializer getSerializer()
 * @method \Amethyst\Validators\ValueValidator getValidator()
 * @method \Amethyst\Authorizers\ValueAuthorizer getAuthorizer()
 */
class ValueManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.value.data.value';
}
