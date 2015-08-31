<?php

class DashboardController extends BaseController {
  public function __construct() {
    $this->beforeFilter('auth', array('on'=>'get'));
  }

  public function getIndex() {
    return View::make('dashboard.index');
  }

  public function getSettings() {
    return View::make('dashboard.settings');
  }

  public function getEdit() {
    return View::make('dashboard.edit');
  }

  public function getView() {
    return View::make('dashboard.view');
  }
}

?>
