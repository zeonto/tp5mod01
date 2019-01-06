<?php
/**
 * 后台管理面板父类
 * --------------------------------------------------------------------------
 *
 * @copyright zeonto
 * @version 0.1.0
 * @author zeonto k.va@foxmail.com
 * @date 2019-01-06 19:38:44
 * @since
 *
 */

namespace webase;

use think\Controller;

class AdminCp extends Controller
{
    protected $adminMenus;
    protected $weTemplate = '';

    public function _initialize()
    {
        $this->adminMenus = config('admin_menus');
        // var_export($this->adminMenus);die;
    }

    public function index()
    {
        $this->assign([
            'adminMenus' => $this->adminMenus,
        ]);
        return $this->fetch(TEMPLATES_PATH . 'admincp/index.html.php');
    }
}