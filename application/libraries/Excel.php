<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');  

require_once APPPATH."/third_party/PHPExcel.php";
require_once(APPPATH.'/third_party/PHPExcel/IOFactory.php');
//require_once APPPATH."/third_party/PHPExcel/PHPExcelTemplator/PhpExcelTemplator.php";
 
class Excel extends PHPExcel {
    public function __construct() {
        parent::__construct();
    }
}
?>