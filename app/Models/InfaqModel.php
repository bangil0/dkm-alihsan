<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
class InfaqModel extends Model {
  protected $table = "infaq";
  protected $allowedFields = ['money', 'ip'];

  public function getInfaq() {
    return $this->orderBy('created', 'DESC')->paginate('4', 'bootstrap');
  }

  public function editInfaq($data, $id) {
    return $this->db->table($this->table)->update($data, ['id' => $id]);
  }
}
?>