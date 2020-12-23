<?php
/**
 * Created by Keios Solutions
 * User: Jakub Zych
 * Date: 8/28/16
 * Time: 1:28 PM
 */
namespace Keios\MailgunEndpoint\Components;

use Cms\Classes\ComponentBase;
use Keios\MailgunEndpoint\Classes\Notification;
use Keios\MailgunEndpoint\Models\MailgunNotification;

/**
 * Class MailgunEndpoint
 * @package Keios\MailgunEndpoint\Components
 */
class MailgunEndpoint extends ComponentBase
{

    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'keios.mailgunendpoint::lang.components.mailgunendpoint.name',
            'description' => 'keios.mailgunendpoint::lang.components.mailgunendpoint.description',
        ];
    }

    /**
     * @return array
     */
    public function defineProperties()
    {
        return [
        ];
    }

    /**
     * Gets Mailgun Notification, parses it and adds to DB
     *
     * @throws \ApplicationException
     */
    public function onRun()
    {
        $input = \Input::all();
        $input = $this->normalizeInput($input);
        $this->validateInput($input);
        $notification = new Notification($input);
        $mailgunNotification = new MailgunNotification();

        $mailgunNotification->save();
        $mailgunNotification->fromNotification($notification);
        $mailgunNotification->save();

        \Event::fire('mailgunendpoint.newemail', [$mailgunNotification]);
    }

    /**
     * Normalizes Mailgun Post array to lowercase
     *
     * @param array $input
     *
     * @return array
     */
    private function normalizeInput(array $input)
    {
        $array = [];
        foreach($input as $key => $item){
            $array[strtolower($key)] = $item;
        }
        return $array;
    }

    /**
     * Validates if all required fields are in array
     *
     * @param array $input Normalized array
     *
     * @throws \ApplicationException
     */
    private function validateInput(array $input)
    {
        $rules = [
            'message-id',
            'date',
            'sender',
            'to',
            'subject',
            'body-html',
            'body-plain'
        ];
        $validate = \Validator::make($input, $rules);
        if ($validate->fails()) {
            throw new \ApplicationException('Array is not complete');
        }
    }
}