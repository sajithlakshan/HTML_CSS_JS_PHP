<?php
class A {
    function foo() {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n"."<br>";
        } else {
            echo "\$this is not defined.\n"."<br>";
        }
    }
}
class B {
    function bar() {
        A::foo();
    }
}
echo "++++++++++++++++++++++++++++"."<br>"; 
$a = new A();
$a->foo();
echo "++++++++++++++++++++++++++++"."<br>"; 
$b = new B();
$b->bar();
echo "++++++++++++++++++++++++++++"."<br>";    
B::bar();
?>
