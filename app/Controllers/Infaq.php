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

  public function edit() {
    $money = $this->request->getVar('u_money');
    $id    = $this->request->getVar('u_id');
    $ip    = $this->request->getIPAddress();
    $data = [
      "money" => $money,
      "ip"    => $ip
    ];
    $this->infaqmodel->editInfaq($data, $id);
    session()->setFlashdata('edit', 'Data berhasil di update');
    return redirect()->to('/panel');
  }

  public function delete($id) {
    $this->infaqmodel->delete(['id' => $id]);
    session()->setFlashdata('delete', 'Data berhasil dihapus');
    return redirect()->to('/panel');
  }
}
?>