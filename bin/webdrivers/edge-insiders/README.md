# Edge webdriver

Edge webdriver for Selenium Server Standalone, the browser automation framework.

## Version
Release numbers are synchronised with the Selenium versions.
Version of this release is *10.0.16176.1000*
*Edge Version Supported: Current Insiders Fast Ring Build*

## Installation

#### Set IE settings

1. Set Edge zoom level to 100%

#### Inside your robofile

Add the following line of code after the jar file

```
-Dwebdriver.edge.driver=.\\vendor\\joomla-projects\\selenium-server-standalone\\bin\\webdrivers\\edge-insiders\\MicrosoftWebDriver.exe
```

Change the browser setting on /tests/acceptance.suite.yml to:
```
browser: 'MicrosoftEdge'
```

## Acknowledgements
This project was forked from the original [https://github.com/sveneisenschmidt/selenium-server-standalone](https://github.com/sveneisenschmidt/selenium-server-standalone)

Thanks to the [Selenium Project](http://docs.seleniumhq.org/)
