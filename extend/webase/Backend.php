<?php
/**
 * 后端继承公共类
 * --------------------------------------------------------------------------
 *
 * @copyright zeonto
 * @version 0.1.0
 * @author zeonto k.va@foxmail.com
 * @date 2019-01-06 21:18:14
 * @since
 *
 */

namespace webase;


use think\Controller;

class Backend extends Controller
{
    public function _initialize()
    {
        parent::_initialize();
        config('app_trace', true);

        $addtabs = input('addtabs', 0);
        if ($addtabs == 1) {
            define('IS_ADDTABS', true);
        } else {
            define('IS_ADDTABS', false);
        }

        if (IS_ADDTABS) {
            // 如果是通过 addtabs 打开标签页面，请求结果返回 html 格式
            config('default_ajax_return', 'html');
        } else {
            // 直接连接打开页面，开启模板布局继承模板静态资源
            // $this->view->engine->layout(true);
        }
    }

    protected function success($msg = '', $url = null, $data = '', $wait = 3, array $header = [])
    {
        parent::success($msg, $url, $data, $wait, $header);
    }

    protected function error($msg = '', $url = null, $data = '', $wait = 3, array $header = [])
    {
        parent::error($msg, $url, $data, $wait, $header);
    }
}