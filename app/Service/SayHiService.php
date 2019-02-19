<?php
/**
 * (c) Jackie Tao <jackie8tao@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * Date: 19-2-20, Time: 上午3:22
 */

namespace App\Service;

use Keer\Container\ServiceProvider\GenericService;

class Foo
{
    public function helloworld() : string
    {
        return "Hello World, Keer!";
    }
}

/**
 * 测试用户自定义服务组件
 * Class SayHiService
 * @package App\Service
 */
class SayHiService extends GenericService
{
    public function __construct()
    {
        $this->aliases = ['foo'];
    }

    /**
     * 设置组件
     * @return void
     */
    protected function setup()
    {
        $this->component = new Foo();
    }
}