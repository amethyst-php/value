<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\ValuesController::class,
    'router'     => [
        'as'     => 'value.',
        'prefix' => '/values',
    ],
];
