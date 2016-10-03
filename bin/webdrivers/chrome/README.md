# Chrome webdriver

Chrome webdriver for Selenium Server Standalone, the browser automation framework.

## Version
Release numbers are synchronised with the Selenium versions.
Version of this release is *v2.53.1.1*

## Installation

### Inside your robofile (RoboFile.php in the root directory)

Add the following line of code after the call up of the jar file:

####For Windows:
```
-Dwebdriver.chrome.driver=.\\vendor\\joomla-projects\\selenium-server-standalone\\bin\\webdrivers\\chrome\\chromedriver.exe
```

####For Mac:
```
-Dwebdriver.chrome.driver=./vendor/joomla-projects/selenium-server-standalone/bin/webdrivers/chrome/chromedriver_mac
```

####For Linux:
```
32bit
-Dwebdriver.chrome.driver=./vendor/joomla-projects/selenium-server-standalone/bin/webdrivers/chrome/chromedriver_linux_32
```
```
64bit
-Dwebdriver.chrome.driver=./vendor/joomla-projects/selenium-server-standalone/bin/webdrivers/chrome/chromedriver_linux_64
```

If use Windows or Linux on a 64bit machine your robofile.php should look like this:
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
		if (strtoupper(substr(PHP_OS, 0, 3)) !== 'WIN')
		{
			$this->_exec($this->testsPath . "vendor/bin/selenium-server-standalone -Dwebdriver.chrome.driver=./vendor/joomla-projects/selenium-server-standalone/bin/webdrivers/chrome/chromedriver_linux_64 >> selenium.log 2>&1 &");
		}
		else
		{
			$this->_exec("START java.exe -jar -Dwebdriver.chrome.driver=.\\tests\\codeception\\vendor\\joomla-projects\\selenium-server-standalone\\bin\\selenium-server-standalone.jar");
		}
    ...
```

After that install ChromeDriver:

```
sudo apt-get install unzip

wget -N http://chromedriver.storage.googleapis.com/2.20/chromedriver_linux64.zip
unzip chromedriver_linux64.zip
chmod +x chromedriver

sudo mv -f chromedriver /usr/local/share/chromedriver
sudo ln -s /usr/local/share/chromedriver /usr/local/bin/chromedriver
sudo ln -s /usr/local/share/chromedriver /usr/bin/chromedriver
```

You can find the ChromeDriver releases on the webpage http://chromedriver.storage.googleapis.com/. If you’re using a 32-bit system the ChromeDriver download used above won’t work!

###Change the browser setting on /tests/codeception/acceptance.suite.yml to:
```
browser: 'chrome'
```

###Have a look into the Logfile
If you have problems starting selenium-server-standalone with your prefered webdriver have a look into the file selenium.log in the root directory. 

## Acknowledgements
This project was forked from the original [https://github.com/sveneisenschmidt/selenium-server-standalone](https://github.com/sveneisenschmidt/selenium-server-standalone)

Thanks to the [Selenium Project](http://docs.seleniumhq.org/)
