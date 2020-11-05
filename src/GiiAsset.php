<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace sankaest\gii;

use sankaest\rebase\BaseAssetBundle;
use sankaest\rebase\YiiAsset;
use yii\web\AssetBundle;

/**
 * This declares the asset files required by Gii.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class GiiAsset extends BaseAssetBundle
{

    public $sourcePath = __DIR__ . '/assets';

    public $css = [
        'css/main.css',
    ];

    public $js = [
        'js/bs4-native.min.js',
        'js/gii.js',
    ];
    /**
     * @inheritdoc
     */
    public $depends = [
        YiiAsset::class
    ];
}
