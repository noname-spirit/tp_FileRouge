
<?php 

class BDD{

    private static $instance = null ;
    private $connexion ; 
    public static function getInstance()
    {
        if(self::$instance === null){
            self::$instance = new BDD();
        }
        return self::$instance ; 
    }
    private function __construct() // méthode magique 
    {
        $dsn = "mysql:host=localhost:8889;dbname=cookshare;charset=utf8mb4" ;
        $login = "root";
        $password = "root";
        // role => garantir que l'on ne peut créer QU'UNE SEULE FOIS une connexion à la base de données 
        $this->connexion = new PDO($dsn, $login , $password);
        // var_dump($this->connexion); pour verrifier la connection si ok 
    }

    public function query( string $sql  , array $params = []){
        $stmt = $this->connexion->prepare($sql);
        $stmt->execute($params);
        if(str_starts_with($sql , "INSERT INTO")){
            return $this->connexion->lastInsertId(); 
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }

}
