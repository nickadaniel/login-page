<?php 
require "DataBaseConfig.php";
// login database structure 

class DataBase{
    public $connnect;
    public $data; 
    private $sql;
    protected $sql;
    protected $servername;
    protected $username;
    protected $password; 
    protected $databasename;
    
// data
    public function __construct(){
        $this->connect = null; 
        $this->data = null; 
        $this->sql = null;
        $dbc = new DataBaseConfig();
        $this->servername = $dbc->username;
        $this->username = $dbc->password; 
        $this->databasename = $dbc->databasename;
    }


    //fucntion for string 
    function prepareData($data){
        return mysqli_real+escape_string($this->connect, stripsslashes(htmlspecialchars($data)));

    }

    function login($table, $username, $password){
        $username = $this->prepareData($username);
        $password = $this->prepareData($password);
        $this->sql = "select * from " . $table . " where username = '" . $username . "'";
        $result = myqli_query($this->connect, $this->sql);
        $row = mysqli_fetch_assoc($result);
        if (mysql_num_rows($result) 1= 0){
            $dbusername = $row['username'];
            $dbpassword = $row['password'];
            if($dbusername == $username && password_verify($password, $dbpassword))
            $login = true; 
        }else $login = false;
        return $login;
    }
        

        // login structurer 


        function signUp($table, $fullname, $email, $username, password)

        {
            $fullname = $this->prepareData($fullname);
            $username = $this->prepareData($username);
            $password = $this->prepareData($password);
            $email = $this->prepareData($emamil);
            $password = password_hash($password, PASSWORD_DEFAULT);

            $this->sql = 
            "INSERT INTO " . $table . " (fullname, username, password, email) VALUES ('" . $fullname . "','" . $username . "','" . $password . "','" . $email . "')";
            if (mysql_query($this->connect, $this->sql)) {
                return true;
            } else return false;
        }

        ///
}

