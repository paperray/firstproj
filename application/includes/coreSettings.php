<?php
/*
| Lets include our constant variable
*/
require 'cons.php';

/*
| Include our Connection
*/
require INCLUDE_ROOT."application/controllers/connectionController.php";



/*
| Include our Controller
*/
require INCLUDE_ROOT."application/controllers/mainController.php";

/*
| Include our models
*/
require INCLUDE_ROOT."application/models/models.php";

/*
| Lets initialize our main class to load all controllers
*/
$init = new WebApp();

/*
| Include our Loader
*/
require INCLUDE_ROOT."application/loader.php";




/*
| Load our controller
*/