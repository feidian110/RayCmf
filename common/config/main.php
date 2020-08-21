<?php
return [
    'name' => 'Ray-Cmf',
    'version' => '0.0.1',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    //项目语言
    'language' => 'zh-CN',
    'sourceLanguage' => 'zh-cn',
    //时区
    'timeZone' => 'Asia/Shanghai',
    'components' => [
        /*--------------------------------- 缓存 ----------------------------------------*/
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        /*--------------------------------- 服务层 ----------------------------------------*/
        'services' => [
            'class' => 'common\services\Application',
        ],
    ],
];
