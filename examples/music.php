<?php

require '../vendor/autoload.php';
require_once __DIR__ . '/../src/TikTok.php';

/**
 * Get development config
 */
// config = require_once __DIR__ . '/env.php';

use TikTok\Scraper;

// Instantiate TikTok Scraper library
$scraper = new Scraper();

try {
  /**
   * THIS DOES NOT WORK RIGHT NOW
   * @TODO: FIX THIS
   */
  $data = $scraper->music->data(6821468236035541766);

  // Check for an error here.
  if ($scraper->error) print_r($scraper->error);

  print_r($data);
} catch (Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}