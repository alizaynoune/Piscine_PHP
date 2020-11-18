<?php
class Tyrion extends Lannister {
	public function sleepWith($name_class) {
		$name = get_class($name_class);
		if ($name == "Jaime")
			print(parent::$drunk.PHP_EOL);
		else if ($name === "Sansa")
			print(parent::$do_it.PHP_EOL);
		else if ($name === "Cersei")
			print(parent::$drunk.PHP_EOL);
	}
}
?>
