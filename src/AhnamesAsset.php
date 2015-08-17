<?php

/*
 * AHnames AdminLte Theme for HiPanel
 *
 * @link      https://github.com/ahnames/hipanel-theme-adminlte
 * @package   hipanel-theme-adminlte
 * @license   No license
 * @copyright Copyright (c) 2015, AHnames (https://ahnames.com/)
 */

namespace ahnames\themes\adminlte;

class AhnamesAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@ahnames/themes/adminlte/assets';

    public $css = [
        'css/hipanel.php',
    ];

    public $depends = [
        'ahnames\assets\ahnames\AhnamesAsset',
    ];
}
