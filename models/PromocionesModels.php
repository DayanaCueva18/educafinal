<!-- Esta es la clase de la pregunta cuando el campo en la tabla de datos es autoincrementable se define aca la variable -->
<?php 
class PromocionesModels{
    # Atributos
    private $dbh;
    protected $ID;
    protected $Nombre;
    protected $Apellido;
    protected $Email;
    protected $Respuesta;

    # Sobrecarga de Constructores
    public function __construct()
    {
        try {
            $this->dbh = DataBase::connection();
            $a = func_get_args();
            $i = func_num_args();
            if (method_exists($this, $f = '__construct' . $i)) {
                call_user_func_array(array($this, $f), $a);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function __construct1($ID, $Nombre, $Apellido, $Email, $Respuesta)
    {
        $this->ID = $ID;
        $this->Nombre = $Nombre;
        $this->Apellido = $Apellido;
        $this->Email = $Email;
        $this->Respuesta = $Respuesta;
    }

    public function __construct2($Nombre, $Apellido, $Email, $Respuesta)
    {
        
        $this->Nombre = $Nombre;
        $this->Apellido = $Apellido;
        $this->Email = $Email;
        $this->Respuesta = $Respuesta;
    }

    

    # Métodos: $ID
    public function setID($ID)
    {
        $this->ID = $ID;
    }
    public function getID()
    {
        return $this->ID;
    }


    # Métodos: $Nombre
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }
    public function getNombre()
    {
        return $this->Nombre;
    }

    # Métodos: $Apellido
    public function setApellido($Apellido)
    {
        $this->Apellido = $Apellido;
    }
    public function getApellido()
    {
        return $this->Apellido;
    }

    # Métodos: $Email
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }
    public function getEmail()
    {
        return $this->Email;
    }

    # Métodos: $Respuesta
    public function setRespuesta($Respuesta)
    {
        $this->Respuesta = $Respuesta;
    }
    public function getRespuesta()
    {
        return $this->Respuesta;
    }

    public function RegistrarPromocion()
    {
        try {
            $sql = 'INSERT INTO PROMOCIONES VALUES (
                            :ID,
                            :Nombre,
                            :Apellido,
                            :Email,
                            :Respuesta
                        )';
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue('ID', $this->getID());
            $stmt->bindValue('Nombre', $this->getNombre());
            $stmt->bindValue('Apellido', $this->getApellido());
            $stmt->bindValue('Email', $this->getEmail());
            $stmt->bindValue('Respuesta', $this->getRespuesta());
            $stmt->execute();
        }catch (Exception $e) {
        die($e->getMessage());}
        
    }


}