# Firefox Gecko / Marionette webdriver

New Firefox Marionette driver for Selenium Server Standalone, the browser automation framework.

## Version
Version of this release is *v0.10.0*

## Installation

#### Inside your robofile

Add the following lines in your RoboFile.php

```php
$driver = 'vendor/joomla-projects/selenium-server-standalone/bin/webdrivers/geckodriver/geckodriver_mac'; // Adjust for OS
$this->_exec("vendor/bin/selenium-server-standalone -Dwebdriver.gecko.driver=" . $driver . " >> selenium.log 2>&1 &");
```

Change the browser setting on /tests/acceptance.suite.yml to:

```
browser: 'firefox'
```

and set the following capabilities:

```
capabilities:
              marionette: true
```

## Acknowledgements
This project was forked from the original [https://github.com/sveneisenschmidt/selenium-server-standalone](https://github.com/sveneisenschmidt/selenium-server-standalone)

Thanks to the [Selenium Project](http://docs.seleniumhq.org/)
