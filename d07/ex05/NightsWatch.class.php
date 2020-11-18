<?php
class NightsWatch implements IFighter {
	public function fight() {
	}
	public function recruit($name_class) {
		if ($name_class instanceof IFighter)
			$name_class::fight();
	}
}
?>
