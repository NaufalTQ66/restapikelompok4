<?php
namespace App\Models;
use CodeIgniter\Model;
class BuahModel extends Model
{
    protected $table = 'buah';
    protected $primaryKey = 'idbuah';
    protected $allowedFields = [
    'namabuah', 'tutorialbuah','manfaatbuah'
    ];
    protected $returnType = 'App\Entities\Buah';
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