<?php
// Language plugin, https://github.com/datenstrom/yellow-plugins/tree/master/language
// Copyright (c) 2013-2017 Datenstrom, https://datenstrom.se
// This file may be used and distributed under the terms of the public license.

class YellowLanguage
{
	const VERSION = "0.6.15";
}

$yellow->plugins->register("language", "YellowLanguage", YellowLanguage::VERSION);
?>