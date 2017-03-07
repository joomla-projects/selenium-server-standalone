<?php
/**
 * @package    Selenium-server-standalone
 *
 * @copyright  Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * Class to easily launch selenium with a correct browser driver
 *
 * @since  3.0.2
 */
class Selenium {
	/**
	 * SeleniumBlah constructor.
	 *
	 * @param   array  $options  - array(
	 *                              'browser' => 'firefox|chrome|MicrosoftEdge|Internet Explorer',
	 *                              'insider' => true|false,
	 *                              'selenium_params' => array()
	 *                          )
	 */
	public function __construct($options)
	{
		if (!isset($options['browser']))
		{
			echo 'You need to specify a browser';
			exit(1);
		}

		$this->browser = $options['browser'];

		$this->isInsider = isset($options['insider']) ? $options['insider'] : false;

		$this->seleniumParams = '';

		if (isset($options['selenium_params']) && is_array($options['selenium_params']))
		{
			$this->seleniumParams = implode(' ', $options['selenium_params']);
		}
	}

	/**
	 * Start selenium
	 *
	 * @return void
	 *
	 * @since version
	 */
	public function run()
	{
		if (!$this->isWindows())
		{
			$command = $this->testsPath . "vendor/bin/selenium-server-standalone " . $this->getWebDriver() . $this->seleniumParams . ' >> selenium.log 2>&1 &';

			print('executing: ' . $command);
			exec($command);
			return;
		}

		$command = "START java.exe -jar " . $this->getWebDriver() . $this->seleniumParams . ' ' . __DIR__ . '\bin\selenium-server-standalone.jar';

		print('executing: ' . $command);

		pclose(popen($command, 'r'));

	}

	/**
	 * Detect the correct driver for selenium
	 *
	 * @return  string the webdriver string to use with selenium
	 *
	 * @since version
	 */
	public function getWebdriver()
	{
		$browser = $this->browser;
		$config = parse_ini_file(__DIR__ . '/config.dist.ini', true);

		if (file_exists(__DIR__ . '/config.ini'))
		{
			$config = parse_ini_file(__DIR__ . '/config.ini', true);
		}

		if ($browser == 'chrome')
		{
			$driver['type'] = 'webdriver.chrome.driver';
		}
		elseif ($browser == 'firefox')
		{
			$driver['type'] = 'webdriver.gecko.driver';
		}
		elseif ($browser == 'MicrosoftEdge')
		{
			$driver['type'] = 'webdriver.edge.driver';
		}
		elseif ($browser == 'internet explorer')
		{
			$driver['type'] = 'webdriver.ie.driver';
		}

		// All the exceptions in the world...
		if ($browser == 'MicrosoftEdge' && $this->isInsider)
		{
			$driver['path'] = __DIR__ . '/' . $config['MicrosoftEdge']['windowsInsider'];
		}
		elseif (isset($config[$browser][$this->getOs()]))
		{
			$driver['path'] = __DIR__ . '/' . $config[$browser][$this->getOs()];
		}
		else
		{
			print('No driver for your browser. Check your browser configuration in config.ini');

			// We can't do anything without a driver, exit
			exit(1);
		}

		return '-D' . implode('=', $driver);
	}

	/**
	 * Return the os name
	 *
	 * @return string
	 *
	 * @since version
	 */
	private function getOs()
	{
		$os = php_uname('s');

		if (stripos($os, 'windows') !== false)
		{
			return 'windows';
		}
		// Who have thought that Mac is actually Darwin???
		elseif (stripos($os, 'darwin') !== false)
		{
			return 'mac';
		}

		return 'linux';
	}

	/**
	 * Check if local OS is Windows
	 *
	 * @return bool
	 */
	private function isWindows()
	{
		return strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';
	}
}
