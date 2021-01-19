<?php namespace Admin\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Admin\Contact\Components\ContactForm' => 'contactForm',

        ];
    }

    public function registerSettings()
    {
    }
}
