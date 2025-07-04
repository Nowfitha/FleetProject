<?php

namespace Tobuli\Helpers\Payments\Gateways\PayPal\Common;

/**
 * Class ArrayUtil
 * Util Class for Arrays
 *
 * @package Tobuli\Helpers\Payments\Gateways\PayPal\Common
 */
class ArrayUtil
{
    /**
     *
     * @param array $arr
     * @return true if $arr is an associative array
     */
    public static function isAssocArray(array $arr)
    {
        foreach ($arr as $k => $v) {
            if (is_int($k)) {
                return false;
            }
        }
        return true;
    }
}
