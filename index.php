<?php
/**
 * (c) Jackie Tao <jackie8tao@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * Date: 19-2-17, Time: 下午10:29
 */

require_once __DIR__ . '/vendor/autoload.php';

$app = new \Keer\Foundation\Pantheon(__DIR__);

try {
    $app->handle(\Symfony\Component\HttpFoundation\Request::createFromGlobals());
} catch (\Keer\Foundation\Exception\FoundationException $e) {
    die($e->getMessage());
}