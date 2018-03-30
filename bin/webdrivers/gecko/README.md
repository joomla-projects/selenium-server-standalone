# Firefox Gecko / Marionette webdriver

New Firefox Marionette driver for Selenium Server Standalone, the browser automation framework.

## Version
Version of this release is *v0.20* (https://github.com/mozilla/geckodriver/releases/tag/v0.19.1)


## Installation

#### Inside your robofile (RoboFile.php in the root directory)

You do not have to edit your robofile if you want to use Firefox Gecko / Marionette webdriver.

Make sure you add the webdriver directory to your $PATH in order for selenium to find it.


###Setting on /tests/codeception/acceptance.suite.yml are browser
The default browser setting on /tests/codeception/acceptance.suite.yml for the browser is ``browser: 'chrome'``.
Just make sure that the browser in your acceptance.suite.yml is set to firefox.
Change the browser setting on /tests/codeception/acceptance.suite.yml to ``browser: 'firefox'``

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
                browser: 'firefox'
                window_size: 1024x768
   ...
```

###Have a look into the Logfile
If you have problems starting selenium-server-standalone with your prefered webdriver have a look into the file selenium.log in the root directory.



## Acknowledgements
This project was forked from the original [https://github.com/sveneisenschmidt/selenium-server-standalone](https://github.com/sveneisenschmidt/selenium-server-standalone)

Thanks to the [Selenium Project](http://docs.seleniumhq.org/)
