<?php

$config = [
    'id' => 'luya-website',
    'basePath' => dirname(__DIR__),
    'defaultRoute' => 'cms', // set the default module
    'modules' => [
        'luya' => 'luya\Module',
        'cms' => 'cms\Module',
        'cmsadmin' => 'cmsadmin\Module',
        'admin' => 'admin\Module'
    ]
];

return \yii\helpers\ArrayHelper::merge($config, require('local.php'));