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

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    /**
     * {@inheritdoc}
     */
    protected $_items = [
        'themes' => [
            'ahnames-adminlte' => [
                'class' => 'ahnames\themes\adminlte\AdminLteTheme',
            ],
        ],
    ];
}
