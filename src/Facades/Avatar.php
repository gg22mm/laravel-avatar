<?php

namespace Wll\Cxp\Avatar\Facades;//包里会自动省略src
use Illuminate\Support\Facades\Facade;//设置门面
class Avatar extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'avatar';
	}
}