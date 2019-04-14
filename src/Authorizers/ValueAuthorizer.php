<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class ValueAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'value.create',
        Tokens::PERMISSION_UPDATE => 'value.update',
        Tokens::PERMISSION_SHOW   => 'value.show',
        Tokens::PERMISSION_REMOVE => 'value.remove',
    ];
}
