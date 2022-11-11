<h1>page 1</h1>


<?php


    class person{
        
        public $name;
        public $lastname;
        private $age=20;
        protected $id="41241424142";


        protected function print_PHP_version(){

            var_dump(phpinfo());
            
             


        }

        private function print_class_name(){
            echo "<h3>person</h3>";
        }

        public function print_name(){
            echo $this->name;
        }

        public function print_age(){
            $this->print_class_name();
            echo $this->age;
        }

        public function get_age2(){

            return $this->age;
        }

        public function get_id(){
            return $this->id;
        }
    } 




    $person1=new person();
    $person1->name="Victoria";
    // $person1->age=19;
    //$person1->id =19;
    $person1->print_age();

    $age2=$person1->get_age2()+10;
    echo "<br><h1>age - {$age2}</h1>";

    // $person1->print_PHP_version();


?>
