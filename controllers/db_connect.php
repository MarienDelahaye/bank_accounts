<?php
class DB {

    // Attributs
    var $host;
    var $db;
    var $user;
    var $pass;
    var $link;

    var $result;

    // Builder per default of the class
    function DB(){
        $this->host = "localhost";
        $this->db = "bank_accounts";
        $this->user = "root";
        $this->pass = "marien_delahaye";
        $this->link = mysqli_connect($this->host, $this->user, $this->pass);
        mysqli_select_db($this->db);
      // register_shutdown_function($this->close);  
    }
    // Classes method
    function query($query) {
        $this->result = mysqli_query ( $query, $this->link );
    }
    function fetch() {
        return mysqli_fetch_array ( $this->result, MYSQL_ASSOC );
    }
    function close() {
        mysqli_close($this->link);
    }
}
 ?>
