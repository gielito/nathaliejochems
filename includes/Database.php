<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'nathaliejochems');
    
   


   

class Database
{

    public $connection;
    function __construct()
    {
        $this->open_db_connection();
    }

    function open_db_connection(){
        $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if(mysqli_connect_errno()){
            die("Database connection mislukt" .mysqli_error());

        }
    }
    

private function confirm_query($result){
    if(!$result){
        die("query kon niet worden uitgevoerd" .$this->connection->error);
    }

}
    public function query($sql){
        $result = $this->connection->query($sql);       
        $this->confirm_query($result);
        return $result;
    }

    public function escape_string($string){
        $escaped_string = $this->connection->real_escape_string($string);       
        return $escaped_string;
    }
    
    public function the_insert_id(){
        return mysqli_insert_id($this->connection);

    }


/*function evenementenlijst(){
    $vraag = "SELECT * FROM evenementen WHERE actief = 1;";
    global $connection;
   
    foreach ($rij = mysqli_fetch_row($antwoord)){
        $categorie = $rij[1];
        $titel = $rij[2];
        $afbeelding = $rij[3];
        $beschrijving = $rij[4];
        $prijs = $rij[6];
        echo '
        <div class="col-lg-4 col-md-6 special-grid '.$categorie.'">
            <div class="gallery-single fix">
                <img src="images/'.$afbeelding.'" class="img-fluid" alt="Image">
                <div class="why-text">
                    <h4>'.$titel.'</h4>
                    <p>'.$beschrijving.'</p>
                    <h5> &euro;'.$prijs.'</h5>
                </div>
            </div>
        </div>';
    }
}*/




}

$database = new Database();





?>