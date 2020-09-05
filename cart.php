class Cart
{
	private $products = [];

	public function add($product)
	{
		$this->products[] = $product; 
	}

	public function get()
	{
		return $this->products;
	}

	public function remove($name)
	{
		foreach ($this->products as $id => $elem){
			if ($elem->getName() == $name) {
				unset($this->products[$id]);
			}
		}
	}

	public function getToTalQuantity()
	{
		$sum = 0;

		foreach ($this->products as $elem){
			$sum += $elem->quantity;
		}
		return $sum;
	}
}
