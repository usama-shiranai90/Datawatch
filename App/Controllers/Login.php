<?php

namespace App\Controllers;

use \Core\View;

class Login extends \Core\Controller
{
  /**
   * Show the index page
   *
   * @return void
   * @throws \Exception
   */
    public function indexAction()
    {
//      View::render('Login/index.php', ['name'    => 'bukhari']);
        View::render('Administration/Summary/index.php', ['name'    => 'bukhari']);
    }
}
