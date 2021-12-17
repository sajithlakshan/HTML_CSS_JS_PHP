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

 
$a = new A();
$a->foo();
  

 /*
$b = new B();
$b->bar();
  
B::bar();
?>
