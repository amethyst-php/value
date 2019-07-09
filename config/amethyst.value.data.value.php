<?php

return [
    'table'      => 'amethyst_values',
    'comment'    => 'Value',
    'model'      => Amethyst\Models\Value::class,
    'schema'     => Amethyst\Schemas\ValueSchema::class,
    'repository' => Amethyst\Repositories\ValueRepository::class,
    'serializer' => Amethyst\Serializers\ValueSerializer::class,
    'validator'  => Amethyst\Validators\ValueValidator::class,
    'authorizer' => Amethyst\Authorizers\ValueAuthorizer::class,
    'faker'      => Amethyst\Fakers\ValueFaker::class,
    'manager'    => Amethyst\Managers\ValueManager::class,
    'attributes' => [
        'key' => [
            'taxonomy' => 'Value Key',
        ],
        'valuable' => [
            'options' => [],
        ],
    ],
];
