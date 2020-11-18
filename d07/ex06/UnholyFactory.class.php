<?php
class UnholyFactory extends Fighter {
	public function __construct() {
	}
	public function absorb($name) {
		print(get_class($name).PHP_EOL);
		$this->$target = $name;
		#array_push($this->$target, "slls");
		
	}
	public function fabricate($name) {
		print("===>".($name)."\n");
#		return($this->$ret);
	}
}

class Fighter {
	public $target;
	private $ret;
	public function __construct() {
	}
}

?>
