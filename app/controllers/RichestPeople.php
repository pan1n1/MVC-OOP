<?php
class RichestPeople extends Controller {
  
  public function __construct() {
    $this->richestModel = $this->model('Richest');
    /**echo(var_dump($_POST));*/
  }

  public function index() {
    /**
     * Haal via de method getFruits() uit de model Fruit de records op
     * uit de database
     */
    $countries = $this->richestModel->getCountries();

    /**
     * Maak de inhoud voor de tbody in de view
     */
    $rows = '';
    foreach ($countries as $value){
      $rows .= "<tr>
                  <td>$value->id</td>
                  <td>" . htmlentities($value->name, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . number_format($value->nettoWorth, 0, ',', '.') . "</td>
                  <td>" . number_format($value->age, 0, ',', '.') . "</td>
                  <td>" . htmlentities($value->company, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td><a href='". URLROOT . "/RichestPeople/update/$value->id'>Update</a></td>
                  <td><a href='". URLROOT . "/RichestPeople/delete/$value->id'>Delete</a></td>
                </tr>";
    }


    $data = [
      'title' => '<h1>Rijkste mensen</h1>',
      'RichestPeople' => $rows
    ];
    $this->view('RichestPeople/index', $data);
  }


  public function update($id = null){
    var_dump($id);    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
      //var_dump($_POST);
      $this->richestModel->updateRichPerson($_POST);
      header("Location: ". URLROOT."/RichestPeople/index ");
    }else{
      $row = $this->richestModel->getSingleCountry($id);
      $data = [
      'title' => '<h1>update Rijkste mensen</h1>',
      'row' => $row
    ];
    $this->view("RichestPeople/update", $data); 
  }
  }

  public function delete($id){
    $this ->richestModel->deleteCountry($id);

    $data =[
      'deleteStatus' => "Het record met id  = $id is verwijderd<br>"
    ];

    $this-> view("RichestPeople/delete", $data);
    header("Refresh:3 url=" .URLROOT. "/RichestPeople/index");
  }
  
  public function create(){
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      try{
      //sanitizes the post array
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      //prepares and executes query
      $this ->richestModel->createCountry($_POST);
      //send you back to main page
      header("Location: ". URLROOT."/RichestPeople/index ");
    } catch(PDOException $e) {
      echo("<h3>Het inserten van de record is gefaald<br></h3><h4>");
      var_dump($e);
      echo("</h4><br>");
    }
    }else{
    $data = ["title" => "Voeg nieuw land in"];
    echo("ai2");
    $this-> view("RichestPeople/create", $data);
   
    }
  }
}
?>