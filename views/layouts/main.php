<?php

use \yii;
use \yii\helpers\Url;

$composition = yii::$app->collection->composition;

?>
<html>
    <head>
        <title>Luya-Demo-Webseite <?= $this->context->pageTitle; ?></title>
        <base href="<?= Url::base(true); ?>/" />
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" />
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
        <div class="container">
            <div id="teaser">LUYA</div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div id="nav">
                        <ul>
                            <?php foreach (Yii::$app->collection->links->findByArguments(['cat' => 'default', 'lang' => $composition->langShortCode, 'parent_nav_id' => 0]) as $item): ?>
                                <li><a href="<?= $composition->getFull(); ?>/<?=$item['url'];?>"><?= $item['title']; ?></a> <small>(<?= $item['url'];?>)</small>
                                    <ul>
                                        <?php foreach (Yii::$app->collection->links->findByArguments(['lang' => $composition->langShortCode, 'parent_nav_id' => $item['id']]) as $subItem): ?>
                                        <li><a href="<?= $composition->getFull(); ?>/<?=$subItem['url'];?>"><?= $subItem['title']?></a> <small>(<?= $subItem['url'];?>)</small>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div id="content">
                        <?= $content; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
