# Laravel queue email exercise

## Migration setting

  1. `php artisan queue:table`
  2. `php artisan queue:failed-table`

##Queue Listening
  1. `php artisan queue:listen`

##Email config

  1. config/mail.php <br>
    `'from' => ['address' => 'youremail@xxx.com', 'name' => 'yourname']`

  2. .env profile <br>
    `MAIL_DRIVER=smtp` <br>
    `MAIL_HOST=smtp.gmail.com` <br>
    `MAIL_PORT=587` <br>
    `MAIL_USERNAME=youremail@xxx.com` <br>
    `MAIL_PASSWORD=yourpassword` <br>
    `MAIL_ENCRYPTION=tls` <br>

  3. if you have this question about the [Swift_TransportException] <br>
     `php artisan config:cache`

## Reference site
  * [laravel 5 send queued email](https://www.youtube.com/watch?v=FiQn87SA7to) <br>
  * [google gmail setting](http://learninglaravel.net/learn-to-send-emails-using-gmail-and-sendgrid-in-laravel-5)
  * [Mail_template](https://www.youtube.com/watch?v=3U-8DJMhNRE&index=1&list=PLgXHySBLgtg5LcEtJ0JzNvXmV9Up85a0D)