<?php
  class PagesController {
    public function home() {
      $first_name = 'Fuko';
      $last_name  = 'Duffrin';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>
