<?php
/**
 * MediaException class
 *
 */

abstract class MediaException {

	/**
	 * @param string $message
	 *
	 * @throws Exception
	 */
	public function throwException( $message ){
		throw new Exception($message);
	}
}