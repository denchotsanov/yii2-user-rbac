<?php
namespace denchotsanov\rbac;

use yii\web\AssetBundle;

class RbacAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/denchotsanov/yii2-user-rbac/assets';
    /**
     * @var array
     */
    public $js = [
        'js/rbac.js',
    ];
    public $css = [
        'css/rbac.css',
    ];
    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];
}