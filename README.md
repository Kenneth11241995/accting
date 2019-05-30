# accounting-system
Accounting system for Kenneth

open the file C:\Windows\System32\drivers\etc\host

add this line 127.0.0.1	accounting-system.local

Open this file C:\xampp\apache\conf\extra\httpd-vhosts.conf

<VirtualHost accounting-system.local:80>
  DocumentRoot "C:\xampp\htdocs\laravel\public"
  ServerAdmin accounting-system.local
  <Directory "C:\xampp\htdocs\laravel">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
  </Directory>
</VirtualHost>

Restart or run xampp and you can now access the system thru http://accounting-system.local
