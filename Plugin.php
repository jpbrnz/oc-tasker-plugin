<?php namespace Jbdev\Tasker;

use Backend;
use System\Classes\PluginBase;

/**
 * Tasker Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'PM',
            'description' => 'Project Management',
            'author'      => 'Jbdev',
            'icon'        => 'icon-folder-open'
        ];
    }

    public function registerNavigation()
    {
        return [
            'tasker' => [
                'label'       => 'PM',
                'url'         => Backend::url('jbdev/tasker/projects'),
                'icon'        => 'icon-folder-open',
                'permissions' => ['tasker.*'],
                'order'       => 100,

                'sideMenu' => [
                    'tasker' => [
                        'label'       => 'Projects',
                        'icon'        => 'icon-folder-open',
                        'url'         => Backend::url('jbdev/tasker/projects'),
                    ],
                ]
            ]
        ];
    }

}