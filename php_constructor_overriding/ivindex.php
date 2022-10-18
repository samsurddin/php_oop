<?php

class Hospital
{

    public $staf;
    public $location;
    public $worker;
    public $permission;

    public function __construct(int $staf, string $location, string $worker, string $permission)
    {
        $this->staf = $staf;
        $this->location = $location;
        $this->worker = $worker;
        $this->permission = $permission;

        $this->showInfo();
    }

    public function GeTHospitalInfo(): void
    {
        echo "hospital staf : {$this->staf} <br>";
        echo "hospital location : {$this->location} <br>";
        echo "hospital houre  : {$this->worker} <br>";
        echo "hospital Permission : {$this->permission} <br>";
    }

    public function showInfo(): void
    {
        $this->GeTHospitalInfo();
    }
}

class NewHospital extends Hospital
{
    protected $title;
    public $doctor;

    function __construct(int $staf, string $location, string $worker, string $permission, string $doctor)
    {
        parent::__construct($staf, $location, $worker, $permission);
        $this->doctor = $doctor;
        echo "<br>";
        echo $this->GeTtitL();
    }



    public function GeTtitL(): string
    {
        return $this->title = "Doctors in the United States have roots going back to colonial times. 
            In the beginning, doctors were medical professionals practicing as surgeons,
             physicians, or apothecaries. There was little regulation, 
             licensing, or standardized education. Today, 
             there are more than 140 accredited medical institutions in the United States,
             and every state has standard education, 
             licensing, and certification requirements";
    }
}

$sf = 20;
$lc = "Chandpur";
$wk = "Full time";
$pr = "govment";
$dc = "Piyal";

$obj = new NewHospital($sf, $lc, $wk, $pr, $dc);
