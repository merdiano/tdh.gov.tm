<?php
/**
 * Created by Keios Solutions
 * User: Jakub Zych
 * Date: 8/28/16
 * Time: 1:28 PM
 */
namespace Keios\MailgunEndpoint\Models;

use Keios\MailgunEndpoint\Classes\Notification;
use Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * MailgunNotification Model
 */
class MailgunNotification extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = 'keios_mailgunendpoint_mailgun_notifications';

    /**
     * Guarded fields
     *
     * @var array
     */
    protected $guarded = ['*'];

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * Email attachments
     *
     * @var array
     */
    public $attachMany = [
        'attachments' => 'System\Models\File',
    ];

    /**
     * Creates model from Notification object
     *
     * @param Notification $notification
     */
    public function fromNotification($notification)
    {
        $this->messageId = $notification->getMessageId();
        $this->date = $notification->getDate();
        $this->sender = $notification->getSender();
        $this->receiver = $notification->getReceiver();
        $this->subject = $notification->getSubject();
        $this->bodyHtml = $notification->getBodyHtml();
        $this->bodyRaw = $notification->getBodyRaw();
        $attachedFiles = $notification->getAttachments();
        if ($attachedFiles) {
            /** @var UploadedFile $attachment */
            foreach ($attachedFiles as $attachment) {
                $file = new \System\Models\File;
                $file->data = $attachment;
                $file->is_public = false;
                $file->save();
                $this->attachments()->add($file);
            }
        }
    }

    /**
     * Creates Notification object from Model
     *
     * @return Notification
     */
    public function toNotification()
    {
        $notification = new Notification();
        $notification->setMessageId($this->messageId);
        $notification->setDate($this->date);
        $notification->setSender($this->sender);
        $notification->setReceiver($this->receiver);
        $notification->setSubject($this->subject);
        $notification->setBodyHtml($this->bodyHtml);
        $notification->setBodyRaw($this->bodyRaw);
        $notification->setAttachments($this->attachments);

        return $notification;
    }
}