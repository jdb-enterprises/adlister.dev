<?php 

require_once __DIR__ . '/Model.php';

class Items extends Model 
{
	// ARRAY TO STORE 
	protected $item = array();
	// FUNCTION TO INSERT A NEW ITEM INTO THE ITEMS TABLE 
	protected function insert() 
	{
		$query = 'INSERT INTO item (price, name, description) VALUES (:price, :name, :description)';
		
		$stmt = self::$dbc->prepare($query);

        $stmt->bindValue(':price', $this->item['price'], PDO::PARAM_STR);
        $stmt->bindValue(':name', $this->item['name'], PDO::PARAM_STR);
        $stmt->bindValue(':description', $this->item['description'], PDO::PARAM_STR);
        $stmt->execute();

        $this->item['id'] = self::$dbc->lastInsertID();
	}

}


 ?>