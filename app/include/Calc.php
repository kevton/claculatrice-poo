<?php


class Calc
{
    public $numb1;
    public $numb2;
    public $cal;

    public function __construct($numb1, $numb2, $cal)
    {
        $this->numb1 = $numb1;
        $this->numb2 = $numb2;
        $this->cal = $cal;
    }

    public function calcMethod()
    {
        switch ($this->cal){
            case 'add':
                $result = $this->numb1 + $this->numb2;
                break;
            case 'sub':
                $result = $this->numb1 - $this->numb2;
                break;
            case 'mul':
                $result = $this->numb1 * $this->numb2;
                break;
            case 'div':
                $result = $this->numb1 / $this->numb2;
                break;

            default:
                $result = "Error";
                break;
        }
        return $result;
    }
}