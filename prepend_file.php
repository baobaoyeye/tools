<?php
/**
 * For use easy,you can add this filepath to your php.ini
 * option [auto_prepend_file =.../prepend_file.php]
 * to auto these functions before you call your php script
 *
 * @author baorenyi
 * @date   2015-09-28
 */




/**
 * get args informations about now called method
 * 
 * Usage: 
 * $_args = func_get_args();
 * $log = diy_get_method_args(__METHOD__,$_args);
 * 
 * The $log is a string type value, what you want to print for you debug.
 *
 * Suggestion:
 * Don't use this method on your online product code.
 *
 * @return {string} args infos
 * @author baorenyi
 */
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
