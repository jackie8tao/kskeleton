<?php
/**
 * (c) Jackie Tao <jackie8tao@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * Date: 19-2-18, Time: 下午8:48
 */

namespace App\Middleware;

use Keer\Foundation\Support\AbstractMiddleware;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

/**
 * 跨站脚本攻击处理，将表单提交中的所有标签都执行转义。
 * Class XssMiddleware
 * @package App\Middleware
 */
class XssMiddleware extends AbstractMiddleware
{
    /**
     * 执行错误时，返回相关提示
     * @return HttpResponse
     */
    public function message(): HttpResponse
    {
        // 简单的返回首页
        return new RedirectResponse("/");
    }

    /**
     * 执行中间件
     * @return bool
     */
    public function execute(): bool
    {
        $this->normalize($this->request->attributes);
        $this->normalize($this->request->query);
        $this->normalize($this->request->request);

        return true;
    }

    /**
     * 替换客户端提交的属性中的任何html标签
     * @param ParameterBag $attr
     */
    protected function normalize(ParameterBag $attr)
    {
        foreach ($attr->all() as $key => $value) {
            // 此处做了折中，只检查提交的表单的首层数据
            if (!is_string($value)) continue;
            $attr->set($key, htmlspecialchars($value));
        }
    }
}