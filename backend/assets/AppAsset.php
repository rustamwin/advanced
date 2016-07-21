<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@backend/assets/src';
    public $baseUrl = '@web';
    public $css = [
        'adminlte/css/font-awesome.min.css',
        'adminlte/css/ionicons.min.css',
        'adminlte/css/AdminLTE.css',
    ];
    public $js = [
        'adminlte/js/AdminLTE/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
