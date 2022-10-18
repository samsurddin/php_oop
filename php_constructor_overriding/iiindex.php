<?php

class News
{
    public $country;
    public $area;
    public $type;

    public function __construct(string $country, string $area, string $type)
    {
        $this->country = $country;
        $this->area = $area;
        $this->type = $type;
    }
    
}

class NewNews extends News
{

    public $startdate;
    public $limit;


    public function Names(): void
    {
        echo "Country  : {$this->country}<br>";
        echo "Country  : {$this->area}<br>";
        echo "Country  : {$this->type}<br>";
        echo "Date     : {$this->startdate}<br>";
        echo "Limit    : {$this->limit}<br>";
    }

    public function __construct(string $country, string $area, string $type, string $date, string $limit)
    {

        parent::__construct($country, $area, $type);
        $this->startdate = $date;
        $this->limit = $limit;
        $this->Names();
    }

}
$country = "Bangladesh";
$area = "Khulna";
$type = "Student";
$date = "20.20.21";
$limit = "Full country";

$obj = new NewNews($country, $area, $type, $date, $limit);
