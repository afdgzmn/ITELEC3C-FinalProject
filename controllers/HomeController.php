<?php

include_once('controllers/Controller.php');

class HomeController extends Controller {

    function ourDoctors() {
        return 'our-doctors.php?specialization="allergology"';
    }
} 
?>