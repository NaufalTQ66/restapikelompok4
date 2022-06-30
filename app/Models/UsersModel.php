<?php
namespace App\Models;
use CodeIgniter\Model;
class UsersModel extends Model
{
protected $table = 'users';
protected $primaryKey = 'id';
protected $allowedFields = [
'username', 'email','alamat','password'
];
protected $returnType = 'App\Entities\Users';
protected $useTimestamps = false;
public function findById($id)
{
$data = $this->find($id);
if ($data) {
return $data;
}
return false;
}
}