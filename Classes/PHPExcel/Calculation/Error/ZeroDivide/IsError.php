<?php
/**
 * @author Anton Lytkin <a.lytkin@worksolutions.ru>
 */

class PHPExcel_Calculation_Error_ZeroDivide_IsError extends PHPExcel_Calculation_Error_ZeroDivide_Abstract {

    /**
     * @return bool
     */
    public function isError() {
        return false;
    }
}