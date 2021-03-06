<?php

namespace Phile\ServiceLocator;

/**
 * Interface CacheInterface
 *
 * @package Phile\ServiceLocator
 */
interface CacheInterface {
	/**
	 * check if an entry with this key exists
	 *
	 * @param $key
	 *
	 * @return mixed
	 */
	public function has($key);

	/**
	 * get the entry by given key
	 *
	 * @param $key
	 *
	 * @return mixed
	 */
	public function get($key);

	/**
	 * set the entry to the given key
	 *
	 * @param       $key
	 * @param       $value
	 * @param int   $time
	 * @param array $options
	 *
	 * @return mixed
	 */
	public function set($key, $value, $time = 300, array $options = array());

	/**
	 * delete the entry by given key
	 *
	 * @param       $key
	 * @param array $options
	 *
	 * @return mixed
	 */
	public function delete($key, array $options = array());
}
