<?php

declare(strict_types=1);

return [
    'yiisoft/yii-view' => [
        'viewPath' => '@views',
        'layout' => '@layout/main',
        'injections' => [
            // Use for add Csrf parameter to all views
            // Reference::to(CsrfViewInjection::class),
            // or
            // DynamicReference::to(function (ContainerInterface $container) {
            //     return $container
            //         ->get(CsrfViewInjection::class)
            //         ->withParameter('mycsrf');
            // }),
        ],
    ],
];
