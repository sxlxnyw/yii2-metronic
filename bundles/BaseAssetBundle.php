<?php
/**
 * Created by PhpStorm.
 * User: brunosalzano
 * Date: 26/07/16
 * Time: 05:49
 */
namespace sxlxnyw\metronic\bundles;

use yii\web\AssetBundle;

class BaseAssetBundle extends AssetBundle {
    /**
     * @var string source assets path
     */
    public $sourcePath = '@sxlxnyw/metronic/assets';

    public function init()
    {
        foreach($this->css as $k=>$v) {
            if (strpos($v,'.min.css')===false) {
                $this->css[$k] = defined(YII_ENV_DEV) ? $v : str_replace('.css','.min.css',$v);
            }
        }
        foreach($this->js as $k=>$v) {
            if (strpos($v,'.min.js')===false) {
                $this->js[$k] = defined(YII_ENV_DEV) ? $v : str_replace('.js','.min.js',$v);
            }
        }
        parent::init(); // TODO: Change the autogenerated stub
    }
}