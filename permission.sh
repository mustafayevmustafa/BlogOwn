sudo chown -R laravel:laravel .
sudo find . -type f -exec chmod 644 {} \;
sudo find . -type d -exec chmod 755 {} \;
sudo chgrp -R laravel storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache
