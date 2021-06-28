<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class magazine extends CI_Controller {
    /**
     * index page for article collection
     */

    public function index() {
        $txt = "This is your daily dose of Internet";
        echo "My articles<br>";
        echo "$txt <br> This is the first one";
    }
}
