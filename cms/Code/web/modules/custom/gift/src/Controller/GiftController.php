<?php
/**
 * @file
 * Contains \Drupal\gift\Controller\GiftController.
 */
namespace Drupal\gift\Controller;
class GiftController {
  public function content() {
    $coupons = Array("GIFT10", "GIFT15", "GIFT20", "GIFT25", "GIFT30");
    return array(
      '#type' => 'markup',
      '#title' => 'Your christmas coupon:',
      '#markup' => t("<h2 class='page-header'>".$coupons[array_rand($coupons)]."</h2>"),
    );
  }
}
