
<?php
    /**
     *
     */
    class PropertiesOfoop
    {
        // this is properti
        public $name;
        // this is properti
        public $email;



        public function setDtls(string $name, string $email): void
        {
            $this->name = $name;
            $this->email = $email;
        }


        public function show(): void
        {
            echo "name : {$this->name}<br>";
            echo "email :{$this->email}<br>";
        }
    }

    $obj = new PropertiesOfoop();
    $obj->setDtls("piyal","piyal@gmail.com");
    $obj->show();



 ?>



<h1>
    hello
</h1>