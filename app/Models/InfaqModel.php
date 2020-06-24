<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
class InfaqModel extends Model {
  protected $table = "infaq";
  protected $allowedFields = ['money', 'ip'];

  public function getInfaq() {
    return $this->orderBy('date', 'DESC')->paginate('4', 'bootstrap');
  }
}
?>