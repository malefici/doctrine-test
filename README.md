Пример Doctrine ORM
===================

Верстаче, юзай линуксовую консоль!

Инсталлируем:

```bash

./install_composer.sh

php composer.phar install

```

Конфигурируем подключение:

```bash

cp config.php.dist config.php 
nano config.php

```

Создаём структуру и заполняем тестовыми данными:

```bash

php vendor/bin/doctrine orm:schema-tool:create

php create_data.php

```

Проверяем:

```bash

php select_data.php

```

Как всё работает, смотри в `create_data.php` и `select_data.php`.