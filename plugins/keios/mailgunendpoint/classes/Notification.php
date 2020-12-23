<?php
/**
 * Created by Keios Solutions
 * User: Jakub Zych
 * Date: 8/28/16
 * Time: 1:28 PM
 */
namespace Keios\MailgunEndpoint\Classes;

use Carbon\Carbon;

/**
 * Class Notification
 * @package Keios\MailgunEndpoint\Classes
 */
class Notification
{
    /**
     * @var string
     */
    protected $messageId;
    /**
     * @var string
     */
    protected $date;
    /**
     * @var string
     */
    protected $sender;
    /**
     * @var string
     */
    protected $receiver;
    /**
     * @var string
     */
    protected $subject;
    /**
     * @var string
     */
    protected $bodyHtml;
    /**
     * @var string
     */
    protected $bodyRaw;
    /**
     * @var array
     */
    protected $attachments;

    /**
     * Notification constructor.
     *
     * @param array $mailgunNotification
     */
    public function __construct(array $mailgunNotification = [])
    {
        if ($mailgunNotification) {
            $this->messageId = $mailgunNotification['message-id'];
            $this->date = $mailgunNotification['date'];
            $this->sender = $mailgunNotification['sender'];
            $this->receiver = $mailgunNotification['to'];
            $this->subject = $mailgunNotification['subject'];
            $this->bodyHtml = $mailgunNotification['body-html'];
            $this->bodyRaw = $mailgunNotification['body-plain'];
            $attachments = [];
            if (array_key_exists('attachment-count', $mailgunNotification)) {
                $attachmentCount = $mailgunNotification['attachment-count'];
                if ($attachmentCount > 0) {
                    for ($i = 1; $i <= $attachmentCount; $i++) {
                        $attachments[] = $mailgunNotification['attachment-'.$i];
                        \Log::debug('Processed attachment: '.print_r($mailgunNotification['attachment-'.$i], true));
                    }
                }
            }
            $this->attachments = $attachments;
        }
    }

    /**
     * @return string
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * @param string $messageId
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
    }

    /**
     * @return Carbon
     */
    public function getDate()
    {
        return new Carbon($this->date);
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param string $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @return string
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @return string
     */
    public function getReceiverName()
    {
        preg_match('/.*</', $this->receiver, $array);
        if ($array) {
            $string = $array[0];

            return str_replace('<', '', $string);
        }

        return '';
    }

    /**
     * @return string
     */
    public function getReceiverEmail()
    {
        $name = $this->getReceiverName();

        return str_replace([$name, '<', '>'], [''], $this->receiver);
    }

    /**
     * @param string $receiver
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * @return string
     */
    public function getBodyHtml()
    {
        return $this->bodyHtml;
    }

    /**
     * @param string $bodyHtml
     */
    public function setBodyHtml($bodyHtml)
    {
        $this->bodyHtml = $bodyHtml;
    }

    /**
     * @return string
     */
    public function getBodyRaw()
    {
        return $this->bodyRaw;
    }

    /**
     * @param string $bodyRaw
     */
    public function setBodyRaw($bodyRaw)
    {
        $this->bodyRaw = $bodyRaw;
    }

    /**
     * @return array
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param array $attachments
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }


}