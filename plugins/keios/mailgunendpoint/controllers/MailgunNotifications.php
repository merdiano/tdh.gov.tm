<?php
/**
 * Created by Keios Solutions
 * User: Jakub Zych
 * Date: 8/28/16
 * Time: 1:28 PM
 */
namespace Keios\MailgunEndpoint\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Flash;
use Lang;
use Keios\MailgunEndpoint\Models\MailgunNotification;

/**
 * Mailgun Notifications Back-end Controller
 */
class MailgunNotifications extends Controller
{
    /**
     * @var array
     */
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
    ];

    /**
     * @var string
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string
     */
    public $listConfig = 'config_list.yaml';

    /**
     * MailgunNotifications constructor.
     */
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Keios.MailgunEndpoint', 'mailgunendpoint', 'mailgunnotifications');
    }

    /**
     * Deleted checked mailgunnotifications.
     */
    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $mailgunNotificationId) {
                if (!$mailgunNotification = MailgunNotification::find($mailgunNotificationId)) {
                    continue;
                }
                $mailgunNotification->delete();
            }
            Flash::success(Lang::get('keios.mailgunendpoint::lang.mailgunnotifications.delete_selected_success'));
        } else {
            Flash::error(Lang::get('keios.mailgunendpoint::lang.mailgunnotifications.delete_selected_empty'));
        }

        return $this->listRefresh();
    }
}
