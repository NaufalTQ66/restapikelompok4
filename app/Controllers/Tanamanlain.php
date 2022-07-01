<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class Tanamanlain extends ResourceController
{
protected $modelName = 'App\Models\TanamanlainModel';
protected $format = 'json';
public function __construct()
{
$this->validation = \Config\Services::validation();
}
public function index()
{
return $this->respond($this->model->findAll());
}
public function create()
{
$data = $this->request->getPost();
$validate = $this->validation->run($data, 'tanamanlain');
$errors = $this->validation->getErrors();
if ($errors) {
    return $this->fail($errors);
}
$tanamanlain = new \App\Entities\Tanamanlain();
$tanamanlain->fill($data);
$tanamanlain->created_by = 0;
$tanamanlain->created_date = date("Y-m-d H:i:s");
if ($this->model->save($tanamanlain)) {
return $this->respondCreated($tanamanlain, 'tanamanlain created');
}
}
public function update($id = null)
{
$data = $this->request->getRawInput();
$data['idtanamanlain'] = $id;
$validate = $this->validation->run($data, 'update_tanamanlain');
$errors = $this->validation->getErrors();
if ($errors) {
return $this->fail($errors);
}
if (!$this->model->findById($id)) {
return $this->fail('id tidak ditemukan');
}
$tanamanlain = new \App\Entities\Tanamanlain();
$tanamanlain->fill($data);
$tanamanlain->updated_by = 0;
$tanamanlain->updated_date = date("Y-m-d H:i:s");
if ($this->model->save($tanamanlain)) {
return $this->respondUpdated($tanamanlain, 'tanamanlain updated');
}
}
public function delete($id = null)
{
if (!$this->model->findById($id)) {
return $this->fail('id tidak ditemukan');
}
if ($this->model->delete($id)) {
return $this->respondDeleted(['idtanamanlain' => $id . ' Deleted']);
}
}
public function show($id = null)
{
$data = $this->model->findById($id);
if ($data) {
return $this->respond($data);
}
return $this->fail('id tidak ditemukan');
}
}