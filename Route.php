<?php

class Route {
    private string $name;
    private string $grade;
    private string $date;
    private string $style;

    public function __construct(string $name, string $grade, string $date, string $style){
        $this->name = $name;
        $this->grade = $grade;
        $this->date = $date;
        $this->style = $style;

        echo "Udało się utworzyć obiekt {$this->name}";
    }

    public function setName(string $name):void{
        $this->name = $name;
    }

    public function setGrade(string $grade):void{
        $this->grade = $grade;
    }

    public function setDate(string $date):void{
        $this->date = $date;
    }

    public function setStyle(string $style):void{
        $this->style = $style;
    }

    public function getName():string{
        return $this->name;
    }

    public function getGrade():string{
        return $this->grade;
    }

    public function getDate():string{
        return $this->date;
    }

    public function getStyle():string{
        return $this->style;
    }
}