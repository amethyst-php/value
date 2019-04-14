<?php

return [
    'table'      => 'amethyst_values',
    'comment'    => 'Value',
    'model'      => Railken\Amethyst\Models\Value::class,
    'schema'     => Railken\Amethyst\Schemas\ValueSchema::class,
    'repository' => Railken\Amethyst\Repositories\ValueRepository::class,
    'serializer' => Railken\Amethyst\Serializers\ValueSerializer::class,
    'validator'  => Railken\Amethyst\Validators\ValueValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\ValueAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\ValueFaker::class,
    'manager'    => Railken\Amethyst\Managers\ValueManager::class,
    'attributes' => [
        'key' => [
            'taxonomy' => 'Value Key',
        ],
        'valuable' => [
            'options' => [],
        ],
    ],
];
