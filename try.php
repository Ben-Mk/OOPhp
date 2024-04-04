<?php
class A {
    private $b = 'c';
}
class B extends A{
    
}
$obj = new B();
$r = new ReflectionObject($obj);
$p = $r->getProperty('b');
$p->setAccessible(true);
var_dump($p->getValue($obj));
