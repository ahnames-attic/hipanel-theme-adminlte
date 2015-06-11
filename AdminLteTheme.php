<?php
/**
 * @link      https://github.com/ahnames/hipanel-theme-adminlte
 * @license   No license
 * @copyright Copyright (c) 2015 AHnames
 */

namespace ahnames\themes\adminlte;

/**
 * Class for this theme.
 */
class AdminLteTheme extends \hipanel\themes\adminlte\AdminLteTheme
{
    public $label = 'AHnames AdminLte v2';

    public $assets = [
        'frontend\assets\AppAsset',
        'hiqdev\assets\adminlte\AdminLteAsset',
        'ahnames\themes\adminlte\AhnamesAsset',
    ];
}
