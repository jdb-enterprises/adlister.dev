<?php 

require_once __DIR__ . '/Model.php';
class Item extends Model 
{
    
 protected static $table = 'items';

    // checks if the attribute being saved is password and hashes it if so
    public function __set($name, $value)
    {
        parent::__set($name, $value);
    }

	public static function searchItems($name)
    {

    	self::dbConnect();

    	$query = 'SELECT * FROM ' . self::$table . " WHERE name LIKE :name";

    	$stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':name', '%' . $name . '%', PDO::PARAM_STR);
        $stmt->execute();

        //Store the resultset in a variable named $result
        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;

        if ( $results )
        {

            $instance = new static;
            $instance->attributes = $results;
        }

        return $instance;
    }
}


