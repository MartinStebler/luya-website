<?

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

if (YII_DEBUG) {
    /*
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';
    */
}

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=luyadb;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8'
        ]
    ]
];
