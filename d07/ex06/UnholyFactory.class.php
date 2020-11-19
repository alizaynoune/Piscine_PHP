<?php class UnholyFactory {
	private $fighters = Array();

	public function absorb($type) {
		if ($type instanceof Fighter)
		{
			if (!array_key_exists($type->id_fighter, $this->fighters))
			{
				$this->fighters[$type->id_fighter] = $type;
				print("(Factory absorbed a fighter of type $type->id_fighter)\n");
			}
			else
				print("(Factory already absorbed a fighter of type $type->id_fighter)\n");
		}
		else
			print("(Factory can't absorb this, it's not a fighter)\n");
	}

	public function fabricate($id) {
		if (array_key_exists($id, $this->fighters))
		{
			print("(Factory fabricates a fighter of type $id)\n");
			return($this->fighters[$id]);
		}
		else
		{
			print("(Factory hasn't absorbed any fighter of type $id)\n");
			return(NULL);
		}
	}
}
?>
