<?php

namespace App\Controllers;
use \Core\View;

class AdministrativeController  extends \Core\Controller
{
  public function indexAction()
  {
    View::render('Administration/index.php', []);
  }

  public function salesSummaryAction()
  {
    View::render('Administration/Summary/index.php', []);
  }

  public function productStateAction()
  {
    View::render('Administration/ProductStats/index.php', []);
  }

  public function uploadPageAction()
  {
    View::render('Administration/Upload/index.php', []);
  }


}
