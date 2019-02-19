<?php
/**
 * (c) Jackie Tao <jackie8tao@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * Date: 19-2-17, Time: 下午11:15
 */

return [
    "db" => [
        "default" => "mysql",
        "connections" => [
            "mysql" => [
                "user" => "",
                "password" => "",
                "host" => "127.0.0.1",
                "port" => 0,
                "dbname" => "",
                "unix_socket" => "",
                "charset" => "",
                "ssl_key" => "",
                "ssl_cert" => "",
                "ssl_ca" => "",
                "ssl_capath" => "",
                "ssl_ciper" => "",
                "driver" => "pdo_mysql",
                "driverOptions" => []
            ],

            "pgsql" => [
                "user" => "",
                "password" => "",
                "host" => "",
                "port" => 0,
                "dbname" => "",
                "unix_socket" => "",
                "charset" => ""
            ],

            "sqlite" => [

            ]
        ]
    ]
];