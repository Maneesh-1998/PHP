<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn php</title>
</head>
<body>
    <?php
    #Object Oriented Programming
    class Employee{
        //properties
        public $name;
        public $salary;

        //function or method
        public function show_details(){
            echo "Name=".$this->name;
            echo "<br>";
            echo "salary=".$this->salary;
            echo "<br>";
        }
    }
    //creating object
    $e1=new Employee();
    $e1->name="Maneesh";
    $e1->salary=10000;
    $e1->show_details();

    $e2=new Employee();
    $e2->name="Kumar";
    $e2->salary=20000;
    $e2->show_details();



    ?>
</body>
</html>