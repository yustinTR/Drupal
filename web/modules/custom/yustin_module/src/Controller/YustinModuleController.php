<?php

namespace Drupal\yustin_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for yustin-module routes.
 */
class YustinModuleController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
