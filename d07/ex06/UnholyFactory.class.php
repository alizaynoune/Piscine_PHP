<?php
class UnholyFactory {
    private $fighters = Array();
	public function absorb($name) {
        if ($name instanceof Fighter)
		print(get_class($name)."\"".$name->id_fighter.PHP_EOL);
	}
	public function fabricate($name) {
		print("===>".($name)."\n");
#return(clone($name));
	}
}

abstract class Fighter {
	public $id_fighter;
	public function __construct($fight) {
        $this->id_fighter = $fight;
	}
}

?>
