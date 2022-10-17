<?php
  class Richest {
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    public function getCountries() {
      $this->db->query("SELECT * FROM `RichestPeople`;");

      $result = $this->db->resultSet();

      return $result;
    }
  

    public function getSingleCountry($id){
      $this->db->query("SELECT * from RichestPeople where id = :id");
      $this->db->bind(':id', $id, PDO::PARAM_INT);
      //returnes the array of countries to update in countries.php
      return $this->db->single();
    }

    public function updateRichPerson($post){
      $this->db->query("UPDATE RichestPeople 
                            set name = :name, 
                            nettoWorth = :nettoWorth,
                            age = :age,
                            company = :company 
                            where id = :id");
                           
                           $this->db->bind(':id', $post["id"], PDO::PARAM_INT);
                           $this->db->bind(':name', $post["name"], PDO::PARAM_STR);
                           $this->db->bind(':nettoWorth', $post["nettoWorth"], PDO::PARAM_STR);
                           $this->db->bind(':age', $post["age"], PDO::PARAM_STR);
                           $this->db->bind(':company', $post["company"], PDO::PARAM_INT);

      $oi = $this->db;

            var_dump($oi);

                           return $this->db->execute();
    
    }


  public function deleteCountry($id) {
      $this->db->query("DELETE FROM RichestPeople WHERE id = :id");
      $this->db->bind("id", $id, PDO::PARAM_INT);
      return $this->db->execute();
  }

  public function createCountry($post){
    //Here is every value listed that needs to be inserted
    $this->db->query("INSERT INTO RichestPeople(id, name, nettoWorth, age, company) VALUES(:id, :name, :nettoWorth, :age, :company)");
  
      //the values from the post are binded to :variables from the post
      $this->db->bind(':id', NULL, PDO::PARAM_INT);
      $this->db->bind(':name', $post["name"], PDO::PARAM_STR);
      $this->db->bind(':nettoWorth', $post["nettoWorth"], PDO::PARAM_STR);
      $this->db->bind(':age', $post["age"], PDO::PARAM_STR);
      $this->db->bind(':company', $post["company"], PDO::PARAM_INT);

      $oi=$this->db;

      var_dump($oi);

      return $this->db->execute();
     
  }
}

?>
