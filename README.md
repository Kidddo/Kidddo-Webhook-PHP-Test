A PHP script to test Kidddo's [Print Webhook](https://kidddo.com/print-webhook).

Upload `webhook.php` to your server and test by referencing in your Kidddo [Settings](https://kidddo.com/admin#settings) > Use Label Printers > Printer Name > Webhook dialog > Webhook URL:

If your url is `https://local.mysite.com/webhook.php`:

![image](wh.jpg)

Clicking "Print Test Label" will send the following payload to your server and put the contents in a file titled `webhookData` (in the same directory as `webhook.php`).