<?php namespace Admin\Photos;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

     public function registerNavigation()
    {
        return [
            'tdh' => [
                'label'       => 'TDH Media',
                'url'         => Backend::url('admin/photos/photocontroller'),
                'icon'        => 'icon-th-large',
                'permissions' => ['admin.photos.*'],
                'order'       => 321,

                'sideMenu' => [
                    'photos' => [
                        'label'       => 'Photo',
                        'url'         => Backend::url('admin/photos/photocontroller'),
                        'icon'        => 'icon-file-image-o',
                        'order'       => 100
                    ],
                    'videos' => [
                        'label'       => 'Video',
                        'url'         => Backend::url('admin/videos/videoscontroller'),
                        'icon'        => 'icon-video-camera',
                        'order'       => 200
                    ],
                    'interesting' => [
                        'label'       => 'Interesting',
                        'url'         => Backend::url('admin/interesting/interesting'),
                        'icon'        => 'icon-buysellads',
                        'order'       => 300
                    ],
                    'weekly_news' => [
                        'label'       => 'Weekly News',
                        'url'         => Backend::url('admin/weeklynews/weeklynewscontroller'),
                        'icon'        => 'icon-newspaper-o',
                        'order'       => 300
                    ],
                    
                ]
            ]
        ];
    }
}
