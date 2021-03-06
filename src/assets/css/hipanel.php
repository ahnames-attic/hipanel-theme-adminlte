<?php

use ahnames\assets\ahnames\AhnamesAsset;

$asset = AhnamesAsset::register($this);

$logo = Yii::$app->assetManager->getAssetUrl($asset, 'images/logo.png');

?>

.logo-lg {
    background: url(<?= $logo ?>) 5px 6px no-repeat;
}

.logo-mini {
    background: url(<?= $logo ?>) 7px 6px no-repeat;
}

