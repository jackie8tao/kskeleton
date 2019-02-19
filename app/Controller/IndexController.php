<?php
/**
 * (c) Jackie Tao <jackie8tao@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * Date: 19-2-18, Time: 下午3:15
 */

namespace App\Controller;

use Keer\Foundation\Support\AbstractController;

/**
 * 示例控制器
 * Class IndexController
 * @package App\Controller
 */
class IndexController extends AbstractController
{
    public function index()
    {
        kLog()->debug("Hello World!");
        $this->content([
            "msg" => kApp()->take('foo')->helloworld()
        ]);
    }
}