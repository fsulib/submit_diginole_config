<?php

namespace Drupal\submit_diginole_content\Controller;

use Drupal\Core\Controller\ControllerBase;

class PageController extends ControllerBase {

  /**
   * Home page
   */
  public function home() {
    return [
      '#markup' => $this->t('The best in DigiNole Submission Workflows since 2021!')
    ];
  }
}
