<?php
namespace Zf2mb;

/**
 * Thin wrapper around PHP filesystem functions, for mocking purposes.
 */
class Filesystem {

	public function mkdir($path, $mode = 0777, $recursive = false) {
		return mkdir($path, $mode, $recursive);
	}

	public function file_put_contents($filename, $data, $flags = 0, $context = null) {
		return file_put_contents($filename, $data, $flags, $context);
	}

}