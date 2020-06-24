<?php namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\InfaqModel;

class User extends BaseController {
  public function __construct() {
    $this->usermodel = new UserModel();
    $this->infaqmodel = new InfaqModel();
  }

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

  public function loginprocess() {
    $u_name = $this->request->getVar('u_name');
    $u_pass = $this->request->getVar('u_pass');
    $userdata = $this->usermodel->asArray()->where(['user' => $u_name, 'pass' => $u_pass])->first();
    if (!empty($userdata)) {
      session()->set('user', $u_name);
      return redirect()->to('/panel');
    } else {
      session()->setFlashdata('pesan', 'Username atau password salah!');
      $data = [
        "title" => "Login gagal!"
      ];
      return view('pages/login', $data);
    }
  }

  public function panel() {
    if (!session()->get('user')) {
      $data = [
        "title" => "Login"
      ];
      return redirect()->to('/login');
    }
    $data = [
      "infaq" => $this->infaqmodel->getInfaq(),
      "pager" => $this->infaqmodel->pager,
      "title" => "Panel Admin"
    ];

    return view('/pages/panel', $data);
  }

  public function logout() {
    session()->remove('user');
    return redirect()->to('/');
  }

}
?>