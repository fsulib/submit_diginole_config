<?php

namespace Drupal\submit_diginole_content\Controller;

use Drupal\Core\Controller\ControllerBase;

class PageController extends ControllerBase {

  /**
   * Home page
   */
  public function home() {
    $list_of_pages = '<h2>Submission workflow examples</h2>';
    $list_of_pages .= '<ul>';
    $list_of_pages .= '<li><a href="/form/3d-object-submission">3D Object Submission</a></li>';
    $list_of_pages .= '<li><a href="/form/audio-submission">Audio Submission</a></li>';
    $list_of_pages .= '<li><a href="/form/book">Book Submission</a></li>';
    $list_of_pages .= '<li><a href="/form/capstone-project-submission">Capstone Project Submission</a></li>';
    $list_of_pages .= '<li><a href="/form/conference">Conference Submission</a></li>';
    $list_of_pages .= '<li><a href="/form/data-set">Data Set Submission</a></li>';
    $list_of_pages .= '<li><a href="/form/doctoral-nursing-program-dnp-cap">Doctoral Nursing Program (DNP) Capstone Project Submission</a></li>';
    $list_of_pages .= '<li><a href="/form/editorial-submission">Editorial Submission</a></li>';
    $list_of_pages .= '<li><a href="/form/honors-thesis-submission">Honors Thesis Submission</a></li>';
    $list_of_pages .= '<li><a href="/form/journal-article-submission">Journal Article Submission</a></li>';
    $list_of_pages .= '<li><a href="/form/minimal-submission">Minimal Submission</a></li>';
    $list_of_pages .= '<li><a href="/form/other-submission">Other Submission</a></li>';
    $list_of_pages .= '<li><a href="/form/report-submission">Report Submission</a></li>';
    $list_of_pages .= '<li><a href="/form/review-submission">Review Submission</a></li>';
    $list_of_pages .= '<li><a href="/form/university-records-submission">University Records Submission</a></li>';
    $list_of_pages .= '<li><a href="/form/video-submission">Video Submission</a></li>';
    $list_of_pages .= '<li><a href="/form/working-paper">Working Paper</a></li>';
    $list_of_pages .= '</ul>';

    return [
      '#markup' => $this->t($list_of_pages)
    ];
  }
}
