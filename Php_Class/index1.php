<?php



    class User
    {
        public $name;
        public $email;
        public $age;

        public function getUser(String $name , String $email , int $age): void
        {
            $this->name = $name;
            $this->email = $email;
            $this->age  = $age;
            echo "The name is {$this->name}<br>";
            echo "The name is {$this->email}<br>";
            echo "The name is {$this->age}";
        }



    }

    if(isset($_REQUEST['submit']))
    {

        $name = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $age = $_REQUEST['uage'];

        $dis = new User();
        $dis->getUser($name,$email,$age);


    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username"><br>
        <input type="text" name="email"><br>
        <input type="number" name="uage">

        <input type="submit" value="Submit" name="submit">
    </form>
    <table>
                <td>
                    <tr><?php $dispay ?></tr>

                </td>
            </table>

</body>
</html>
