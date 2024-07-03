<?php 
require_once __DIR__ . "/User.php";
require_once __DIR__ . "/Membership.php";

class PremiumUser extends User{
    private $membership;

    public function __construct($username, $password, Membership $membership){
        parent::__construct($username, $password);
        $this->membership = $membership;
    }
}