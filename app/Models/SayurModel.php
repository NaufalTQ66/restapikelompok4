<?php
namespace App\Models;
use CodeIgniter\Model;
class SayurModel extends Model
{
    protected $table = 'sayur';
    protected $primaryKey = 'idsayur';
    protected $allowedFields = [
    'namasayur', 'tutorialsayur','manfaatsayur'
    ];
    protected $returnType = 'App\Entities\Sayur';
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