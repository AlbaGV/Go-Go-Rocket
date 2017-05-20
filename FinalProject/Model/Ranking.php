<?php
error_reporting(E_ALL);

class Ranking {

  private $id;
  private $date;
  private $nickname;
  private $score;

 
 

  
  function __construct($id, $date,$nickname,$score) {
    $this->id = $id;
    $this->date = $date;
    $this->nickname = $nickname;
    $this->score = $score;


   
  }

  public function getId() {
    return $this->id;
  }

  public function getDate() {
    return $this->date;
  }

  public function getNickname() {
    return $this->nickname;
  }

  public function getScore() {
    return $this->score;
  }



  

//Inserto una fila
  public function insert() {
    require_once 'Connection.php';
    $connection = game::conect();
    $insert = "INSERT INTO ranking (date,nickname,score) VALUES (\"" . $this->date . "\", \"" .$this->nickname . "\", \"" . $this->score . "\")";
    
    $connection->exec($insert);
  }
  
  //Inserto puntuacion desde el juego
  
  public function insertGame() {
  	require_once 'Connection.php';
  	$connection = game::conect();
  	$insertGame = "INSERT INTO ranking (date,nickname,score) VALUES (CURRENT_TIMESTAMP, \"" .$this->nickname . "\", \"" . $this->score . "\")";
  	print_r($insertGame);
  	$connection->exec($insertGame);
  }

//Modifico 
  public function update() {
    require_once 'Connection.php';
    $connection = game::conect();

    $update = "UPDATE ranking SET  id=\"$this->id\",date=\"$this->date\",nickname=\"$this->nickname\",score=\"$this->score\" WHERE id=\"$_POST[idModificar]\"";
	print_r($update);
    $connection->exec($update);
  }

//Borro las filas
  public function delete() {
    require_once 'Connection.php';
    $connection = game::conect();
    $delete = "DELETE FROM ranking WHERE id=" . $this->id;
    $connection->exec($delete);
  }

  public static function count() {
    require_once 'Connection.php';
    $connection = game::conect();
    $count_query = $connection->query("SELECT * FROM ranking");
    $numrows = $count_query->rowCount();
    return $numrows;
  }

 

  public static function getListRanking($o,$p) {
    $ordenar=$o;
    $forma=$p;
    require_once 'Connection.php';
    $connection = game::conect();
    include 'Pagination.php'; //incluir el archivo de paginación
    include 'ListPagination.php';
 
    $selection = "SELECT id, DATE_FORMAT(date,'%d/%m/%Y') as formatDate,nickname,score FROM ranking ORDER BY  $ordenar $forma LIMIT $offset,$per_page";
    $consulta = $connection->query($selection);
   // print_r($consulta);
    $listado = [];
//Creo un nuevo objeto 
    while ($registro = $consulta->fetchObject()) {
    	$listado[] = new Ranking($registro->id, $registro-> formatDate, $registro->nickname, $registro->score);
    }
    return $listado;
  }

}
