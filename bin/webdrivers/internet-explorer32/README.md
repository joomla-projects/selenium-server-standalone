# Internet Explorer webdriver

Internet explorer 32bit webdriver for Selenium Server Standalone, the browser automation framework.

## Version
Release numbers are synchronised with the Selenium versions.
Version of this release is *v3.4.0*

## Installation
This is required if you want to make use of the latest and greatest features of the WebDriver InternetExplorerDriver. Please make sure that this is available on your $PATH (or %PATH% on Windows) in order for the IE Driver to work as expected.

#### Set IE settings

1. Open internet explorer.
2. Navigate to Tools->Option
3. Navigate to Security Tab
4. Click on "Reset All Zones to Default level" button
5. Now for all option like Internet,Intranet,Trusted Sites and Restricted Site enable "Enable Protected" mode check-box.
6. Set IE zoom level to 100%

#### Inside your robofile

Add the following line of code after the jar file

```
-Dwebdriver.ie.driver=.\\vendor\\joomla-projects\\selenium-server-standalone\\bin\\webdrivers\\internet-explorer32\\IEDriverServer.exe
```

Change the browser setting on /tests/acceptance.suite.yml to:
```
browser: 'internet explorer'
```

## Acknowledgements
This project was forked from the original [https://github.com/sveneisenschmidt/selenium-server-standalone](https://github.com/sveneisenschmidt/selenium-server-standalone)

Thanks to the [Selenium Project](http://docs.seleniumhq.org/)
