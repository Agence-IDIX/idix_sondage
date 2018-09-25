<?php

namespace Drupal\idix_sondage\Controller;

use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\ReplaceCommand;
use Drupal\Core\Controller\ControllerBase;

class AjaxController extends ControllerBase {
  
  public function ajaxPollRecent(){
    $output = [];
    $polls = \Drupal::entityTypeManager()->getStorage('poll')->getMostRecentPoll();
    if ($polls) {
      $poll = reset($polls);
      $viewBuilder = \Drupal::entityTypeManager()->getViewBuilder('poll');
      $output = $viewBuilder->view($poll, 'teaser');
    }

    $response = new AjaxResponse();
    $response->addCommand(new ReplaceCommand('#ajax-poll-recent-wrapper', $output));

    return $response;
  }
  
}