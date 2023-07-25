chown -R laravel:nginx  . \
&& find . -type f -exec chmod 644 {} \; \
&& find . -type d -exec chmod 755 {} \; \
&& chgrp -R laravel storage bootstrap/cache \
&& chmod -R ug+rwx storage bootstrap/cache
