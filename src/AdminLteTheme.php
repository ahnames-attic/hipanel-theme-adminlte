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

/**
 * Class for this theme.
 */
class AdminLteTheme extends \hipanel\themes\adminlte\AdminLteTheme
{
    public $label = 'AHnames AdminLte';

    public $assets = [
        'ahnames\themes\adminlte\AhnamesAsset',
        'hiqdev\assets\adminlte\AdminLteAsset',
    ];
}
