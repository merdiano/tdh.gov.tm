<?php namespace Admin\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;

class ContactForm extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Contact Form',
            'description' => ''
        ];
    }


    public function onSend(){
        
     
        $vars = ['name' => Input::get('name') , 'email' => Input::get('email')];
    
        Mail::send('admin.contact::mail.message', $vars, function($message) {
    
            $message->to('tekemuradov@gmail.com', 'Admin Person');
            $message->subject(Input::get('theme'));
    
        });
        
    }

}