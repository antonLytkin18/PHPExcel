<?php

/**
 * @author Anton Lytkin <a.lytkin@worksolutions.ru>
 */
class PHPExcel_Calculation_Error_ZeroDivide_Default extends PHPExcel_Calculation_Error_ZeroDivide_Abstract {

    /**
     * @return bool
     */
    public function isError() {
        return $this->findZeroDivideArgument($this->args);
    }

    /**
     * @param array $args
     * @return bool
     */
    private function findZeroDivideArgument($args) {
        foreach ($args as $arg) {
            if (is_array($arg)) {
                if ($this->findZeroDivideArgument($arg)) {
                    return true;
                }
            }
            if ($arg === static::$errorCode) {
                return true;
            }
        }
        return false;
    }
}