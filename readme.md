# Laravel queue email exercise

## Migration setting

  1. `php artisan queue:table`
  2. `php artisan queue:failed-table`

##Queue Listening
  1. `php artisan queue:listen`

##Email config

  ###config/mail.php <br>

    `'from' => ['address' => 'youremail@xxx.com', 'name' => 'yourname']`

  ###.env profile <br>

    `
    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.gmail.com
    MAIL_PORT=587
    MAIL_USERNAME=youremail@xxx.com
    MAIL_PASSWORD=yourpassword
    MAIL_ENCRYPTION=tls
    `

## Reference site
  [laravel 5 send queued email](https://www.youtube.com/watch?v=FiQn87SA7to)
