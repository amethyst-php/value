<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\ValuesController::class,
    'router'     => [
        'as'     => 'value.',
        'prefix' => '/values',
    ],
];
