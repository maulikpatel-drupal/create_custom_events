<?php

namespace Drupal\custom_events\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Custom Events' block.
 *
 * @Block(
 *   id = "custom_events_block",
 *   admin_label = @Translation("Custom Events"),
 *   category = @Translation("Custom")
 * )
 */
class CustomEventsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Build the block content.
    return [
      '#theme' => 'custom_events_block',
    ];
  }

}