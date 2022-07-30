<?php

namespace App\Controllers;

use \Core\View;

class EmployeeController extends \Core\Controller
{
  public function indexAction()
  {
//        View::render('Employee/Product/ProductSubmission.php', ['name'    => 'bukhari']);
    View::render('Employee/index.php', []);
  }

  public function submissionAction()
  {
    View::render('Employee/Product/ProductSubmission.php', []);
  }

  public function requestDesignAction()
  {
    View::render('Employee/Request/RequestPage.php', []);
  }

  public function designListAction()
  {
    View::render('Employee/index.php', []);
  }

  public function statusAction()
  {
    View::render('Employee/Product/ProductStatus.php', []);
  }
}
