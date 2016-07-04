# Chrome webdriver

Chrome webdriver for Selenium Server Standalone, the browser automation framework.

## Version
Release numbers are synchronised with the Selenium versions.
Version of this release is *v2.21.0*

## Installation

#### Inside your robofile

Add the following line of code after the jar file

For Windows:
```
-Dwebdriver.chrome.driver=.\\vendor\\joomla-projects\\selenium-server-standalone\\bin\\webdrivers\\chrome\\chromedriver.exe
```

For Mac:
```
-Dwebdriver.chrome.driver=.\\vendor\\joomla-projects\\selenium-server-standalone\\bin\\webdrivers\\chrome\\chromedriver_mac
```

For Linux:
```
32bit
-Dwebdriver.chrome.driver=.\\vendor\\joomla-projects\\selenium-server-standalone\\bin\\webdrivers\\chrome\\chromedriver_linux_32
```
```
64bit
-Dwebdriver.chrome.driver=.\\vendor\\joomla-projects\\selenium-server-standalone\\bin\\webdrivers\\chrome\\chromedriver_linux_64
```

Change the browser setting on /tests/acceptance.suite.yml to:
```
browser: 'chrome'
```

## Acknowledgements
This project was forked from the original [https://github.com/sveneisenschmidt/selenium-server-standalone](https://github.com/sveneisenschmidt/selenium-server-standalone)

Thanks to the [Selenium Project](http://docs.seleniumhq.org/)
