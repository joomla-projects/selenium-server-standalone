# Edge webdriver

Edge webdriver for Selenium Server Standalone, the browser automation framework.

## Version
Release numbers are synchronised with the Selenium versions.

Microsoft WebDriver is now a Windows Feature on Demand.
To install run the following in an elevated command prompt:
DISM.exe /Online /Add-Capability /CapabilityName:Microsoft.WebDriver~~~~0.0.1.0

## Installation

1. Settings - Apps - Manage optional features - Add a feature - select Microsoft Webdriver

#### Set IE settings

1. Set Edge zoom level to 100%

#### Inside your robofile

Add the following line of code after the jar file

```
-Dwebdriver.edge.driver=.\\MicrosoftWebDriver.exe
```

Change the browser setting on /tests/acceptance.suite.yml to:

```
browser: 'MicrosoftEdge'
```

## Acknowledgements
This project was forked from the original [https://github.com/sveneisenschmidt/selenium-server-standalone](https://github.com/sveneisenschmidt/selenium-server-standalone)

Thanks to the [Selenium Project](http://docs.seleniumhq.org/)
