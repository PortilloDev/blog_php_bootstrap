<?php

class Login{

    private $con;

    public function __construct(Conexion $con) {
        $this->con = $con;
    }


    public function setEmail ( String $email ) {
        $this->email = $this->con->real_escape_string($email);
    }

    public function setPassword ( String $password ) {
        //encryptar clave  password_hash( $password, PASSWORD_DEFAULT );
        $this->password = $password;
    }
    
    //consulta existe usuario
    public function getArrayQueryResultLogin (){
        $query = "SELECT * FROM `usuario` WHERE email = '$this->email'";
        $result = $this->con->query($query);
        //lo retorna como un array asociativo
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    //verifica que existe algún usuario con esos datos
    public function isAffectedRows ():bool {
        return ($this->con->affected_rows > 0);
    }

    //verifica que la contraseña es valida
    public function passwordVerify ($password):bool {
        return password_verify($this->password, $password);
    }

    //metodo unifica toda la logica de consulta y verificación
    public function signIn () {
        
        $data = $this->getArrayQueryResultLogin();
        if ( $this->isAffectedRows()) {
             if ( $this->passwordVerify($data['password'])) {
                return $data;
            }
                   
        }else{
            return false;
        }
    }
}