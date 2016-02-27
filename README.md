# selenium-server-standalone

[![Latest Stable Version](https://poser.pugx.org/joomla-projects/selenium-server-standalone/v/stable)](https://packagist.org/packages/joomla-projects/selenium-server-standalone) [![Total Downloads](https://poser.pugx.org/joomla-projects/selenium-server-standalone/downloads)](https://packagist.org/packages/joomla-projects/selenium-server-standalone) [![Latest Unstable Version](https://poser.pugx.org/joomla-projects/selenium-server-standalone/v/unstable)](https://packagist.org/packages/joomla-projects/selenium-server-standalone) [![License](https://poser.pugx.org/joomla-projects/selenium-server-standalone/license)](https://packagist.org/packages/joomla-projects/selenium-server-standalone)


Composer distribution of Selenium Server Standalone, the browser automation framework.

## Version
Release numbers are synchronised with the Selenium versions.
Version of this release is *v2.52.0* 

Selenium Changelog: [https://github.com/SeleniumHQ/selenium/blob/master/java/CHANGELOG](https://github.com/SeleniumHQ/selenium/blob/master/java/CHANGELOG)

Original jar files and checksums: [http://selenium-release.storage.googleapis.com/index.html](http://selenium-release.storage.googleapis.com/index.html)

## Webdriver 

* Google Chrome version 2.21
* Internet Explorer 32-bit version 2.52.1
* Internet explorer 64-bit version 2.52.1
* Microsoft Edge version 1.0
* Microsoft Edge Insiders version 2.1

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



## Acknowledgements
This project was forked from the original [https://github.com/sveneisenschmidt/selenium-server-standalone](https://github.com/sveneisenschmidt/selenium-server-standalone)

Thanks to the [Selenium Project](http://docs.seleniumhq.org/)
