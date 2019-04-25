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

# Edge Chromium webdriver 

Edge webdriver for Selenium Server Standalone, the browser automation framework.

## Version

Version: 75.0.137.0

## Installation

You do not have to do anything if you want to use Edge Chromium Driver. Everything works out of the box :)

Make sure you add the webdriver directory to your $PATH in order for selenium to find it.

#### Inside your robofile

###The default browser setting on /tests/codeception/acceptance.suite.yml are browser: ``'edg'``:
```
    class_name: AcceptanceTester
    modules:
        enabled:
            - Asserts
            - JoomlaBrowser
            - Helper\Acceptance
            - Helper\JoomlaDb
        config:
            JoomlaBrowser:
                url: 'http://localhost/gsoc16_browser-automated-tests/tests/codeception/joomla-cms3'     # the url that points to the joomla installation at /tests/system/joomla-cms
                browser: 'edg'
                window_size: 1024x768
   ...
```

## Acknowledgements
This project was forked from the original [https://github.com/sveneisenschmidt/selenium-server-standalone](https://github.com/sveneisenschmidt/selenium-server-standalone)

Thanks to the [Selenium Project](http://docs.seleniumhq.org/)
