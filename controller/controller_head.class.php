<?php
class Controller_head{
    const titre ="EDW portfolio - développeur";
    public function dates(){
        $_dates = new DateTime();
        print $_dates->format("Y");
    }
}

$_now_date = new Controller_head();

?>
