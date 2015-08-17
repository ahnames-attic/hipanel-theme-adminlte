<?php

namespace ahnames\themes\adminlte;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    /**
     * @inheritdoc
     */
    protected $_items = [
        'themes' => [
            'ahnames-adminlte' => [
                'class' => 'ahnames\themes\adminlte\AdminLteTheme',
            ],
        ],
    ];

}
