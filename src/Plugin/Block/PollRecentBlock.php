<?php

namespace Drupal\idix_sondage\Plugin\Block;

use Drupal\poll\Plugin\Block\PollRecentBlock as PollRecentBlockBase;

class PollRecentBlock extends PollRecentBlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $output = [];
    $output['ajax_poll_recent'] = [
      '#theme' => 'ajax_poll_recent',
      '#attached' => ['library' => 'idix_sondage/async_poll']
    ];

    return $output;
  }

}