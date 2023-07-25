chown -R nginx:nginx  . \
&& find . -type f -exec chmod 644 {} \; \
&& find . -type d -exec chmod 755 {} \; \
&& chgrp -R nginx storage bootstrap/cache \
&& chmod -R ug+rwx storage bootstrap/cache
