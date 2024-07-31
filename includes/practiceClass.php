<?php
    require_once('database.php');
    
    class Practice{
        protected $image;
        protected $bodyPart;
        protected $exerciseName;
        protected $type;
        protected $description;
       

        //A general Getter function
        public function __get($property){
            if(property_exists($this,$property))
                return $this->$property;
        }

        // Check if the instanation has all the attributes of the class
        private function has_attribute($attribute){
            $object_properties=get_object_vars($this);
            return array_key_exists($attribute,$object_properties);
        }

        // Check if the all the objects in the array has all the attributes of the class
        private function  instantation($preferences_array){
            foreach ($preferences_array as $attribute=>$value){
                    if ($result=$this->has_attribute($attribute))
                        $this->$attribute=$value;
                    }
        }

        //A function that gets all of the rows from the preferences DB
        public static function fetch_practices(){  
            global $database;
            $result=$database->query("select * from practice");
            $practices=null;
            if ($result){
                $i=0;
                if ($result->num_rows>0){ 
                    while($row=$result->fetch_assoc()){ 
                        $practice=new Actor();
                        $practice->instantation($row);
                        $practices[$i]=$practice;
                        $i+=1;
                    }
                }
            }
            return $practices;
        }

        public static function fetch_chest_practices($bodyPart){  
            global $database;
            $result=$database->query("select * from practice where bodyPart = '".$bodyPart."'");
            $practices=null;
            if ($result){
                $i=0;
                if ($result->num_rows>0){ 
                    while($row=$result->fetch_assoc()){ 
                        $practice=new Practice();
                        $practice->instantation($row);
                        $practices[$i]=$practice;
                        $i+=1;
                    }
                }
            }
            return $practices;
        }
        
        

    }
?>