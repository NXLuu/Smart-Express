
<?php
class user
{
    public $link;

    function __construct($link)
    {
        $this->link = $link;
    }

    public function checkLogin($ten, $mk)
    {
        $sql = "SELECT * FROM admin WHERE tenDn=? AND mk=?";
        $stmt = $this->link->prepare($sql);
        $stmt->bind_param("ss", $ten, $mk);

        $stmt->execute();

        if ($result = $stmt->get_result()) {
            if (mysqli_num_rows($result)) {
                return mysqli_fetch_array($result);
            } else return null;
        }
    }

    public function signUp($ten, $mk)
    {
        $sql = "INSERT INTO `shipperql`.`admin` (`tenDn`, `mk`) VALUES (?, ?);";
        $stmt = $this->link->prepare($sql);
        $stmt->bind_param("ss", $ten, $mk);

        if ($stmt->execute()) {
            return true;
        } else return false;

        
    }
}
