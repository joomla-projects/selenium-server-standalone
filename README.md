# selenium-server-standalone

[![Latest Stable Version](https://poser.pugx.org/joomla-projects/selenium-server-standalone/v/stable)](https://packagist.org/packages/joomla-projects/selenium-server-standalone) [![Total Downloads](https://poser.pugx.org/joomla-projects/selenium-server-standalone/downloads)](https://packagist.org/packages/joomla-projects/selenium-server-standalone) [![Latest Unstable Version](https://poser.pugx.org/joomla-projects/selenium-server-standalone/v/unstable)](https://packagist.org/packages/joomla-projects/selenium-server-standalone) [![License](https://poser.pugx.org/joomla-projects/selenium-server-standalone/license)](https://packagist.org/packages/joomla-projects/selenium-server-standalone)


Composer distribution of Selenium Server Standalone, the browser automation framework.

## Version
Release numbers are synchronised with the Selenium versions.
Version of this release is *v3.4.0*

Selenium Changelog: [https://github.com/SeleniumHQ/selenium/blob/master/java/CHANGELOG](https://github.com/SeleniumHQ/selenium/blob/master/java/CHANGELOG)

Original jar files and checksums: [http://selenium-release.storage.googleapis.com/index.html](http://selenium-release.storage.googleapis.com/index.html)

## Webdriver

* Google Chrome version 2.29
* Internet Explorer 32-bit version 3.4.0
* Internet explorer 64-bit version 3.4.0
* Microsoft Edge version 4.15063
* Microsoft Edge Insiders version 10.0.16176.1000
* Firefox Gecko / Marionette Driver version 0.16.1

## Installation

#### Inside your composer-powered project
```bash
composer require joomla-projects/selenium-server-standalone
```

#### Standalone

```bash
composer install
```

The command `composer install` will make the selenium executable from inside `bin`.

## Usage

```bash
$ vendor/bin/selenium-server-standalone
```

Arguments are supported.

```bash
$ vendor/bin/selenium-server-standalone -port 4445
```

To shut down Selenium you can visit:

```bash
http://localhost:4444/selenium-server/driver/?cmd=shutDownSeleniumServer
```

## Usage with PHP
If you want to launch Selenium from a PHP application, you could use the Selenium class.

```php
$selenium = new Selenium(array('browser' => 'chrome', 'insider' => false, 'selenium_params' => array()));
$selenium->run();
```

Possible values for browser are chrome|firefox|MicrosoftEdge|internet explorer
If you are in the Windows Insider program, you would need the edge-insiders browser. So set the insider flag to true.

## Acknowledgements
This project was forked from the original [https://github.com/sveneisenschmidt/selenium-server-standalone](https://github.com/sveneisenschmidt/selenium-server-standalone)

Thanks to the [Selenium Project](http://docs.seleniumhq.org/)
