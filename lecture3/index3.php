<hr>

<h1>page 2</h1>

<?php

    class student extends person{


        private $group_number;
        private $GPA;



        public function print_age2(){
            // echo "<br>$this->age";

                // $this->print_class_name();


            $this->print_PHP_version();

        }

       

    }


    $student1=new student();
    $student1->name="luka";
    $student1->print_name();
    // $student1->print_age2();


?>