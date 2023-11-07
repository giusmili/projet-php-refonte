<?php
    class Controller_page{
        static function page(){
            if(isset($_GET['page'])){
                //variable pour $_GET
                $root = $_GET['page'];
                        if($root==1){
                            include_once("./template/index.html");
                        }
                        if($root==2){
                            include_once("./template/portfolio.html");
                        }
                        if($root==3){
                            include_once("./template/contact.html");
                        }
                        else if($root>=3 || $root<=0){
                            echo '<p class="warning"><i class="far fa-frown"></i> La page demandée n\'existe pas!!</p>';
                            //header("HTTP/1.0 404 Not Found");
                        }
        
                    }
                    else{
                        include("./template/index.html");
                }
        
        } 
    }
    Controller_page::page();