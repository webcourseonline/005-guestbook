Codeception [![Latest Stable](https://poser.pugx.org/Codeception/Codeception/version.png)](https://packagist.org/packages/Codeception/Codeception) [![Total Downloads](https://poser.pugx.org/codeception/codeception/downloads.png)](https://packagist.org/packages/codeception/codeception) [![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/Codeception/Codeception?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

# 005-guestbook

## Install

    php -r "readfile('https://getcomposer.org/installer');" > composer-setup.php
    php -r "if (hash('SHA384', file_get_contents('composer-setup.php')) === '7228c001f88bee97506740ef0888240bd8a760b046ee16db8f4095c0d8d525f2367663f22a46b48d072c816e7fe19959') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    php composer-setup.php
    php -r "unlink('composer-setup.php');"
    
    php composer.phar install