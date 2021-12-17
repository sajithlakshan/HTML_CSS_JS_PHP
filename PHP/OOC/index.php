<?php 
class Employee{
    var $first_name;
    var $last_name;
    function full_name(){
        return $this->first_name . ' '. $this->last_name;
    }
    function JJO(){
        echo "<br>"."SAJIIIIIIIIIII";
    }
}
$emloyee = new Employee;
$emloyee->first_name = "SAJITH";
$emloyee->last_name = "LAKSHAN";

echo $emloyee->full_name();

echo Employee::JJO();
?>
