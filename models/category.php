<?php 
 class Category{
   //database connection and table name
   private $conn;
   private $table_name = "category";

   //object properties 
   public $id;
   public $name;
   public $description;
   public $category_name;
   public $created;

   // constructor with $db as database connection
   public function _construct ($db){
    $this->conn = $db;
   }

   function create(){

   }
   function read (){
      //select all query
      $query = "SELECT
                c.name as category_name, p.id, p.name,p.description ,p.price, p.category_id, p.created 
                FROM
                " .  $this->table_name . " p
                LEFT JOIN 
                 categories c
                 ON p.category_id = c.id
                ORDER BY
                p.created DESC";  
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // excute query
        $stmt->excute();

        return $stmt;
   }
   function delete(){

   }
   function update(){

   }
}
?>
