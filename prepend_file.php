<?php

function diy_get_method_args($method,$args){
    $_f = new ReflectionMethod($method);
    $_result = array();
    $count = 0;
    foreach ($_f->getParameters() as $param) {
        $_result[$param->name] = $args[$count++];   
    }
    $_ret = print_r($_result,TRUE);
    $log = <<<EOF

---------------- begin debug function args ------------------
$method
$_ret
----------------- end debug function args -------------------

EOF;
    return $log;
}

?>
