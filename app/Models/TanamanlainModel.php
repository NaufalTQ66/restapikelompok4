<?php
namespace App\Models;
use CodeIgniter\Model;
class TanamanlainModel extends Model
{
    protected $table = 'tanamanlain';
    protected $primaryKey = 'idtanamanlain';
    protected $allowedFields = [
    'namatanamanlain', 'tutorialtanamanlain','manfaattanamanlain'
    ];
    protected $returnType = 'App\Entities\Tanamanlain';
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