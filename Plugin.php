<?php
/**
 * @link        http://github.com/ahnames/hipanel-theme-adminlte
 * @license     No license
 * @copyright   Copyright (c) 2015 AHnames
 */

namespace ahnames\themes\adminlte;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    /**
     * @inheritdoc
     */
    protected $_items = [
        'themes' => [
            'adminlte' => [
                'class' => 'ahnames\themes\adminlte\AdminLteTheme',
            ],
        ],
    ];

}
