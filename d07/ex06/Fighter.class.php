<?php
abstract class Fighter {
	public $id_fighter;

	abstract public function fight($target);
	public function __construct($fight) {
		$this->id_fighter = $fight;
	}
}
?>
