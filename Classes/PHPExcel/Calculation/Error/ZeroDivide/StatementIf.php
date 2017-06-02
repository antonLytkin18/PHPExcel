<?php
/**
 * @author Anton Lytkin <a.lytkin@worksolutions.ru>
 */

class PHPExcel_Calculation_Error_ZeroDivide_StatementIf extends PHPExcel_Calculation_Error_ZeroDivide_Abstract {

    /**
     * @return bool
     */
    public function isError() {
        $condition = PHPExcel_Calculation_Functions::flattenSingleValue($this->args[2]);
        if ($condition === static::$errorCode) {
            return true;
        }

        $returnIfTrue = PHPExcel_Calculation_Functions::flattenSingleValue($this->args[1]);
        if ($condition && $returnIfTrue === static::$errorCode) {
            return true;
        }

        $returnIfFalse = PHPExcel_Calculation_Functions::flattenSingleValue($this->args[0]);
        if (!$condition && $returnIfFalse === static::$errorCode) {
            return true;
        }

        return false;
    }
}