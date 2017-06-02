<?php
/**
 * @author Anton Lytkin <a.lytkin@worksolutions.ru>
 */

abstract class PHPExcel_Calculation_Error_ZeroDivide_Abstract {

    protected $args;
    static $errorCode = '#DIV/0!';

    /**
     * PHPExcel_Calculation_Error_ZeroDivide_Abstract constructor.
     * @param array $args
     */
    public function __construct($args) {
        $this->args = $args;
    }

    /**
     * @return bool
     */
    abstract public function isError();
}
