<?php
/**
 * define some functions for charset transform from one to another
 *
 * @author baorenyi
 * @version 1.0
 * @copyright baorenyi, 19 April, 2016
 */


/**
 * transform utf8 string (include ascii code and chinese) to unicode string 
 * 
 * @param {string} utf8 string
 * @return {string} unicode string
 * @author baorenyi
 */
function utf8_unicode($str){
    return implode("",explode('","',substr(json_encode(preg_split('/(?<!^)(?!$)/u',$str)),2,-2)));
}

/**
 * transform utf8 string (include ascii code and chinese) to unicode array 
 * 
 * @param {string} utf8 string
 * @return {array} unicode array
 * @author baorenyi
 */
function utf8_unicode_arr($str){
    return explode('","',substr(json_encode(preg_split('/(?<!^)(?!$)/u',$str)),2,-2));
}

/**
 * transform unicode string to utf8 string 
 * 
 * @param {string} unicode string
 * @return {string} utf8 string
 * @author baorenyi
 */
function unicode_utf8($str){
    return strlen($str) > 0 ? array_shift(json_decode('["' . $str . '"]')) : "";
}


