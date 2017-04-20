# Chrome webdriver

Chrome webdriver for Selenium Server Standalone, the browser automation framework.

## Version
Version of this release is *v2.29.0*
https://sites.google.com/a/chromium.org/chromedriver/downloads

## Installation

You do not have to do anything if you want to use ChromeDriver. Everything works out of the box :)

## Properties

### Inside your robofile (RoboFile.php in the root directory)

Inside your robofile (RoboFile.php in the root directory) ``$this->getWebDriver()`` will find the correct webdriver for you.

```
  ...
	/**
	 * Runs Selenium Standalone Server.
	 *
	 * @since   __DEPLOY_VERSION__
	 *
	 * @return  void
	 */
	public function runSelenium()
	{
		if (!$this->isWindows())
		{
			$this->_exec($this->testsPath . "vendor/bin/selenium-server-standalone " . $this->getWebDriver() . ' >> selenium.log 2>&1 &');
		}
		else
		{
			$this->_exec("START java.exe -jar " . $this->getWebDriver() . ' tests\codeception\vendor\joomla-projects\selenium-server-standalone\bin\selenium-server-standalone.jar ');
		}
    ...
```


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

Thanks to the [Selenium Project](http://docs.seleniumhq.org/)
