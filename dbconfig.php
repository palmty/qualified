<?php 
class databese {
     private $pdo;


     public function __contruct ($host, $dbname ,$username ,$password ){
         $con = new PDO('mysql:host = '.$host.'; dbname='.$dbname.',' $username,$password);
     } 

}


?>