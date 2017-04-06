<?php
class Database{

  private static $instance=null;
  private $pdo;
  public function __construct() {    
      $host='localhost';
      $username='root';
      $db='todo_php';
      $port=3306;      
         
            try {       	
                $dsn = "mysql:host=" .$host. ";"."port=".$port.";"."dbname=" .$db;
                $this->pdo= new PDO($dsn, $username, 'changeme');
                $this->pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                $this->pdo->exec("SET CHARACTER SET utf8");  
                echo "connected";      
            } catch (Exception $e)
             {
               echo $e;
                //file_put_contents(self::ERROR_LOG_FILE,"PDO ERROR /!\ ".$e, FILE_APPEND);
               return FALSE;
            }  
        
  }
  public static function getInstance(){
    if(self::$instance===null){
      self::$instance=new Database();

    }
    return self::$instance;

  }

}
 

?>