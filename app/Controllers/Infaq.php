<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\InfaqModel;
class Infaq extends Controller {
  public function __construct() {
    $this->infaqmodel = new InfaqModel();
  }

  public function add() {
    $money = $this->request->getVar('u_money');
    $ip    = $this->request->getIPAddress();
    $data  = [
      "money" => $money,
      "ip" => $ip
    ];
    if ($this->infaqmodel->save($data)) {
      session()->setFlashdata("success", "Data berhasil ditambahkan");
      return redirect()->to("/panel");
    }
  }
}
?>