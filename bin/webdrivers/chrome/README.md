# Chrome webdriver

Chrome webdriver for Selenium Server Standalone, the browser automation framework.

## Version
Version of this release is *v2.37.0*
https://sites.google.com/a/chromium.org/chromedriver/downloads
Supports Chrome v64-66

## Installation

You do not have to do anything if you want to use ChromeDriver. Everything works out of the box :)

Make sure you add the webdriver directory to your $PATH in order for selenium to find it.

###The default browser setting on /tests/codeception/acceptance.suite.yml are browser: ``'chrome'``:
```
   ...
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
                browser: 'chrome'
                window_size: 1024x768
   ...
```

###Have a look into the Logfile
If you have problems starting selenium-server-standalone with your prefered webdriver have a look into the file selenium.log in the root directory.

## Acknowledgements
This project was forked from the original [https://github.com/sveneisenschmidt/selenium-server-standalone](https://github.com/sveneisenschmidt/selenium-server-standalone)

Thanks to the [Selenium Project](:http://docs.seleniumhq.org/)
