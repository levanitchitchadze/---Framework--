<hr>
<h1>Page 3<h1>


<?php

    class Hello {

        const message="Hello, I am PHP";


        public static function Print_info(){
            echo self::message. "you can use this programming language !";
        }
        
    }



    echo Hello::message;

    echo "<br>";
    // $hello1=new Hello();
    // $hello1->Print_info();

    Hello::Print_info();

?>