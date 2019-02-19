<?php
/**
 * (c) Jackie Tao <jackie8tao@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 *
 * Date: 19-2-18, Time: 下午10:29
 */

namespace App\Middleware;

use Keer\Foundation\Support\AbstractMiddleware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response as HttpResponse;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * 为请求生成session
 * Class SessionMiddleware
 * @package App\Middleware
 */
class SessionMiddleware extends AbstractMiddleware
{

    /**
     * 执行错误时，返回相关提示
     * @return HttpResponse
     */
    public function message(): HttpResponse
    {
        return new RedirectResponse("/");
    }

    /**
     * 执行中间件
     * @return bool
     */
    public function execute(): bool
    {
        if (!$this->request->hasPreviousSession()) {
            $session = new Session();
            $session->start();
            $this->request->setSession($session);
        }

        return true;
    }
}