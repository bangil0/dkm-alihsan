<?php namespace App\Controllers;
use App\Controllers\BaseController;
class User extends BaseController {
  public function index($month = false, $year = false) {
    $data = [
      "title" => 'DKM Al-Ihsan SMAN 1 Ciwidey'
    ];
    return view('/pages/index', $data);
  }

  public function login() {
    $data = [
      "title" => "Log in"
    ];
    return view('/pages/login', $data);
  }

  public function panel() {
    $data = [
      "title" => "Panel Admin"
    ];
    return view('/pages/panel', $data);
  }

  public function logout() {
    
  }

}
?>