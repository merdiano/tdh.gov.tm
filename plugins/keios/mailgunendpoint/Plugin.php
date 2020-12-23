<?php
/**
 * Created by Keios Solutions
 * User: Jakub Zych
 * Date: 8/28/16
 * Time: 1:28 PM
 */
namespace Keios\MailgunEndpoint;

use Backend;
use System\Classes\PluginBase;

/**
 * MailgunEndpoint Plugin Information File
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
            'name'        => 'keios.mailgunendpoint::lang.plugin.name',
            'description' => 'keios.mailgunendpoint::lang.plugin.description',
            'author'      => 'Keios Solutions',
            'icon'        => 'icon-envelope',
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Keios\MailgunEndpoint\Components\MailgunEndpoint' => 'mailgun_endpoint',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'keios.mailgunendpoint.notifications' => [
                'tab'   => 'keios.mailgunendpoint::lang.plugin.name',
                'label' => 'keios.mailgunendpoint::lang.permissions.notifications',
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'mailgunendpoint' => [
                'label'       => 'keios.mailgunendpoint::lang.plugin.name',
                'url'         => Backend::url('keios/mailgunendpoint/mailgunnotifications'),
                'icon'        => 'icon-envelope',
                'permissions' => ['keios.mailgunendpoint.notifications'],
                'order'       => 500,
            ],
        ];
    }

}
