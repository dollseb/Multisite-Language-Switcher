<?php

namespace lloc\Msls\Query;

use lloc\Msls\MslsSqlCacher;

abstract class AbstractQuery {

	protected MslsSqlCacher $sql_cache;

	public function __construct( MslsSqlCacher $sql_cache ) {
		$this->sql_cache = $sql_cache;
	}
}
