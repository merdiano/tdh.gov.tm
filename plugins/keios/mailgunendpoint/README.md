### oc-mailgunendpoint

This [OctoberCMS](http://octobercms.com) plugin provides the endpoint component for awesome [Mailgun Routes](http://www.mailgun.com/inbound-routing) feature.
 
#### Configuration

You should have a Mailgun account.
 
- Configure a domain with Mailgun
- Configure it for inbound traffic
- Go to **Routes** and add **New route**.
- Setup **Expression** as you like (you may want to notify October about all emails or email just from a specific sender)
- Select **Store and notify** in **Actions** section. Paste there your endpoint OctoberCMS page (eg. *http://domain.com/mail-notif*)
- Optionally, select **Stop** if this is the only Route that should be valid for these emails.

That's it about Mailgun. Leave the routes tab open for now, we'll configure OctoberCMS now.

- Install the plugin
- Create a new empty page without **no layout**.
- Provide it with URL you setup in mailgun (eg. */mail-notif*)
- Put "mailgun_endpoint" component there.

```
title = "Mailgun Endpoint"
url = "/mail-notif"
is_hidden = 0

[mailgun_endpoint]
==
{% mailgun_endpoint %}
```

That's it!

You can send Test Post Request from Mailgun Route Page to see if all works properly.

You should get the e-mail saved in **Mailgun Endpoint** controller, with all the content and attachments.

#### Events

Whenever the e-mail notification is arriving, plugin emits an Event, which includes the notification model to work on.

You can easily subscribe to this event in your plugin and get the full email content and attachments for further processing. 

Basic usage:

Put following code into your Plugin.php boot method:

```
Event::listen('mailgunendpoint.newemail', function($event) {
    // do something here - $event is your MailgunNotification model.
});
```