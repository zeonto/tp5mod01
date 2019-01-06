<?php
/**
 * 日志模块
 * --------------------------------------------------------------------------
 *
 * @copyright zeonto
 * @version 0.1.0
 * @author zeonto k.va@foxmail.com
 * @date 2019-01-06 21:18:14
 * @since
 *
 */

namespace app\system\controller;

use webase\Backend;

class Logs extends Backend
{
    public function setSuccess()
    {
        $this->success('hhhhhh');
    }

    public function lists()
    {
        return $this->fetch(TEMPLATES_PATH . 'common/lists.html.php');
    }
}
