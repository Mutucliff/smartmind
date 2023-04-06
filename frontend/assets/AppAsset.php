<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'dependencies/css/bootstrap.css',
        'dependencies/css/mainStyle.css',
        'dependencies/css/pageStyle.css',
        'dependencies/css/plugin.css',
        'dependencies/css/gdpr-cookie.css',
    ];
    public $js = [
        'dependencies/js/jquery-3.3.6.min.js',
	    'dependencies/js/popper.min.js',
        'dependencies/js/bootstrap.min.js',
        'dependencies/js/jquery-ui.js',
	    'dependencies/js/jquery.ui.touch-punch.min.js',
        'dependencies/js/datepicker.js',
	    'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js',
        'dependencies/js/gdpr-cookie1.js',
	    'dependencies/js/tag.js',
	 

    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap5\BootstrapAsset',
    ];
}
