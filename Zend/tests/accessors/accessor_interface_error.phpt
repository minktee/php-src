--TEST--
ZE2 Tests that an interface which declares a getter/setter errors if an implementor does not implement them
--FILE--
<?php

interface Hours {
	public $Hours { get; set; }
}

class TimePeriod implements Hours {
	public $Seconds = 3600;
	
	public $Hours {
	}
}

?>
--EXPECTF--
Fatal error: Class TimePeriod contains 4 abstract accessors and must be declared abstract or implement the remaining accessors (Hours::$Hours->get, Hours::$Hours->set, Hours::$Hours->isset, ...) in %s on line %d
