<?php
/**
 * (c) Jackie Tao <jackie8tao@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * Date: 19-2-17, Time: 下午11:16
 */

return [
    "app" => [
        "version" => "1.0.0",
        "name" => "Keer Framework",
        "services" => [
            App\Service\SayHiService::class
        ],
        "middlewares" => [
            App\Middleware\XssMiddleware::class,
            App\Middleware\SessionMiddleware::class
        ]
    ]
];