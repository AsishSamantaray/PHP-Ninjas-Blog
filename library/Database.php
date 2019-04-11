<?php
class Database {
  public $host = DB_HOST;
  public $username = DB_USER;
  public $password = DB_PASS;
  public $dbname = DB_NAME;
  public $link;
  public $error;

  public function __construct()
  {
    $this->connect();
  }

  // Connector
  public function connect()
  {
    $this->link = new mysqli($this->host, $this->username, $this->password, $this->dbname);
    if(!$this->link) {
      $this->error = "Connection Error: ".$this->link->connect_error;
    }
    return false;
  }

  // Select Record..
  public function select($query)
  {
    $result = $this->link->query($query) or die($this->link->error.__LINE__) ;
    if($result->num_rows > 0) {
      return $result;
    }
    else {
      return false;
    }
  }

  // Insert Record..
  public function insert($query)
  {
    $insert_row = $this->link->query($query) or die($this->link->error.__LINE__) ;
    if($insert_row) {
      header('Location: index.php?msg='.urldecode('Record Inserted..'));
      exit();
    }
    else {
      die("Error".$this->link->error);
    }
  }

  // Update Record..
  public function update($query)
  {
    $update_row = $this->link->query($query) or die($this->link->error.__LINE__) ;
    if($update_row) {
      header('Location: index.php?msg='.urldecode('Record Updated..'));
      exit();
    }
    else {
      die("Error".$this->link->error);
    }
  }

  // Delete Record..
  public function delete($query)
  {
    $delete_row = $this->link->query($query) or die($this->link->error.__LINE__) ;
    if($delete_row) {
      header('Location: index.php?msg='.urldecode('Record Deleted..'));
      exit();
    }
    else {
      die("Error".$this->link->error);
    }
  }

}

?>
