<?php
namespace Helper;

class Api extends \Codeception\Module
{
	/**
	 * @var array
	 */
	protected $requiredFields = ['placeHolderApi'];

	/**
	 * Return path to JSON schemas
	 *
	 * @param string $file
	 * 
	 * @return string
	 */
	public function getSchemaFile($file) {
		return codecept_data_dir('api/') . $file;
	}

	/**
	 * Set the Api Url for PhpBrowser
	 *
	 * @param string $apiKey
	 *
	 * @throws \Codeception\Exception\ModuleException
	 */
	public function getUrlFromConfiguration($apiKey) {
		$this->getModule('PhpBrowser')->_reconfigure(['url' => $this->config[$apiKey]]);

	}
}
