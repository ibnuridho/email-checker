<?php

namespace Ibnuridho\EmailChecker\Facades;

use Illuminate\Support\Facades\Facade;
/**
 *
 */
class EmailCheck extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'email-check';
	}
}
