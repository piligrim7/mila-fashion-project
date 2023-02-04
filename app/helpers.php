<?php
// ly - helper functions

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

if (! function_exists('active_link')){
	function active_link(string $name, string $active = 'ly-active')
	{
		// возвращаем класс ly-active если роут(для пункта меню с собственным роутом) или реквест (для главного пункта при выбранном дочернем)
		// для роута указываем имя роута для реквеста часть ссылки со звезочкой, например, my_work/*
		return Route::is($name) ? $active : (Request::is($name) ? $active : '');
	}
	}