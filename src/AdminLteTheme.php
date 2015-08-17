<?php

namespace ahnames\themes\adminlte;

/**
 * Class for this theme.
 */
class AdminLteTheme extends \hipanel\themes\adminlte\AdminLteTheme
{
    public $label = 'AHnames AdminLte';

    public $assets = [
        'ahnames\themes\adminlte\AhnamesAsset',
        'hipanel\frontend\assets\AppAsset',
        'hiqdev\assets\adminlte\AdminLteAsset',
    ];
}
