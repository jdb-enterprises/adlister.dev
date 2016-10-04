<?php 

require_once __DIR__ . '/Model.php';

class Items extends Model 
{
	// ARRAY TO STORE 
	protected $items = array();
	// FUNCTION TO INSERT A NEW ITEM INTO THE ITEMS TABLE 
	protected function insert() 
	{
		$query = 'INSERT INTO items (id, price, name, description) VALUES (:id, :price, :name, :description)';
		
		$stmt->bindValue(':id', $this->items['id'], PDO::PARAM_STR);
        $stmt->bindValue(':price', $this->items['price'], PDO::PARAM_STR);
        $stmt->bindValue(':name', $this->items['name'], PDO::PARAM_STR);
        $stmt->bindValue(':description', $this->items['description']), PDO::PARAM_STR);
        $stmt->execute();

        $this->items['id'] = self::$dbc->lastInsertID();
	}

}


 ?>