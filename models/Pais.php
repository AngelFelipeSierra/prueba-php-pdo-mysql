<?php 
namespace Models;
class Pais {
    protected static $conn;
    protected static $columnsTbl = ["idPais", "nombrePais"];
    private $idPais;
    private $nombrePais;
    public function __construct($args = []){
        $this->idPais = $args['idPais'] ?? '';
        $this->idPais = $args['nombrePais'] ?? ''; 
    }

    
    /* Metodo de insercion de data */
    public function saveData($data){
        $delimiter = ":";
        $dataBd = $this->sanitizarAttributos();
        $valCols = $delimiter . join(',:',array_keys($data));
        $cols = join(',', array_keys($data));
        $sql = "INSERT INTO pais ($cols) VALUES ($valCols)";
        $stmt = self::$conn->prepare($sql);
        try {
            $stml->execute($data);
            $response=[[
                'idPais' => $data['idPais'],
                'nombrePais' => $data['nombrePais'],
                ]];
            } catch (\PDOException $e) {
                echo $sql . $e->getMessage();
            }
            return $response;
        }
        public function loadAllData(){
            $sql = "SELECT idPais,nombrePais FROM pais";
            $stmt= self::$conn->prepare($sql);
            $stmt->execute();
            $countries = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $countries;
        }
        /* public function deleteData($id){
            $sql = "DELETE FROM countries where id_country = :id";
            $stmt= self::$conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        }
        public function updateData($data){
            $sql = "UPDATE countries SET name_country = :name_country where id_country = :id";
            $stmt= self::$conn->prepare($sql);
            $stmt->bindParam(':name_country', $data['name_country']);
            $stmt->bindParam(':id', $data['id_country']);
            $stmt->execute();
        } */
        public static function setConn ($connBd){
            self::$conn = $connBd;
    }
    public static function atributos (){
        $atributos = [];
        foreach(self::$columnsTbl as $columna){
            if($columna === 'idPais') continue;
            $atributos [$columna]=$this->$columna;
        }
        return $atributos;
    }
    public function sanitizarAttributos (){
        $atributos = $this->atributos();
        $sanitizado = [];
        foreach ($atributos as $key => $value) {
            $sanitizado[$key] = self::$conn->quote($value);
        }
        return $sanitizado;
    }
}

?>