# ordanbi
# kartaca

https://cekirdektenyetisenler.kartaca.com/task?serviceKey=sxjasykyhrvrujxqm

qvhgrwrdufqtkhpid bu servis anahtarını dönüştürüp giriş sağladım ve görev 2'yi seçtim. 

Proje back-endi laravel ve databasei mysql ile yapılmıştır. Frontend görünümü için vue-js e zamanım yetmedi.

Xampp kurulu olmalı ve çalıştırılmalı.
C:\xampp\apache\conf\extra\httpd-vhosts.conf

<VirtualHost eticaret.test:80>
ServerName eticaret.test
DocumentRoot "C:\Courses\Kartaca\public"
<Directory "C:\Courses\Kartaca\public">
AllowOverride All 
Require all granted
Options Indexes FollowSymLinks
</Directory>
</VirtualHost>

ve

C:\windows\system32\drivers\etc\hosts

eticaret.test

Eklenmelidir.

veritabanı oluşturulduktan sonra php artisan migrate --seed ile doldurulduktan sonra siteye giriş yapılabilir.

Sitede üyelik için mail adresi onayı gerekmektedir. Sanal olarak gönderilir. 
https://mailtrap.io/inboxes sitesinden üyelik oluşturulduktan sonra onaylanabilir.
bektas.cimen@gmail.com - 123456789 ile giriş yapılabilir.

eticaret.test/yonetim/oturumac ile yönetici sayfasına giriş yapılabilir.