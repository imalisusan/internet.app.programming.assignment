<?php
    include_once './util.php';	
    class DBConnector {
        protected $pdo;
        function __construct(){
          $dsn="mysql:host=".Util::$SERVER_NAME.";dbname=" .Util::$DB_NAME .""; //PDO database handle is then created by instantiating the PDO class
          $options = [ 
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //Any errors, which occur when we perform a database transaction will be reported in form of exceptions.
              PDO::ATTR_EMULATE_PREPARES => false, // PDO interface uses prepared statements under the hood.
              PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC //we want data presented as an a associative array 
          ];
          try{
             $this->pdo=new PDO($dsn,Util::$DB_USER,Util::$DB_USER_PASS, $options);				
           }catch (PDOException $e){
                 	echo $e->getMessage();
           }			
        }
        public function connectToDB(){
                return $this->pdo;
        } 			
        public function closeDB(){
                $this->pdo = null;
        }
    }
?>