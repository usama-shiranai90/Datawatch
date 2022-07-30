<?php

namespace App\Controllers;
use \Core\View;

class LoginController extends \Core\Controller
{
  public function indexAction()
  {
    try {
      View::render('Login/index.php', []);
    } catch (\Exception $e) {

    }
  }

}
