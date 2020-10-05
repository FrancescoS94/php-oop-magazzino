<?php
require_once  'classes/Notebook.php';

class Notebook2 extends Notebook {
    private $marca;
    private $ssd;

    public function __construct($_display, $_ram, $_hardDisk, $_marca, $_ssd) {
        parent:: __construct($_display, $_ram, $_hardDisk);
        $this->marca = $_marca;
        $this->ssd = $_ssd;
    }
}

?>
