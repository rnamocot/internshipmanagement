<?php



class queryfullname
{

    public $fullname;

    public function GetloginUser()
    {
        // connect to the database
        include_once("./config/mydb.php");
        $conn = connectionDB();

        $sql = "SELECT user FROM rn_main_users";
        $result = mysqli_query($this->$conn, $sql);

        return $result();
    }
}
