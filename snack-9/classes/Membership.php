<?php 
class Membership{
    private $level;

    public function __construct(Int $level){
        $this->level = $level;
    }

    public function getLevel(){
        return $this->level;
    }

    public function setLevel($level){
        return $this->level = $level;
    }

    public function getBonus($level){
        if($level > 3 ){
            return "Your bonus is...";
        } else {
            return "No bonus";
        }
    }
}