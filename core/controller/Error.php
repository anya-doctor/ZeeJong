<?php
/*
Error Controller

Created February 2014
*/


namespace Controller {

require_once(dirname(__FILE__) . '/Controller.php');


    class Error extends Controller {

        public $page = 'error';
        public $title;


        public function __construct() {
            $this->theme = 'error.php';
            $this->title = 'Error - ' . Controller::siteName;
        }


        /**
        Call GET methode with parameters

        @param params
        */
        public function GET($args) {
        }


    }

}

?>
