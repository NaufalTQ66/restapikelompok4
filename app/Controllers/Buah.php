<?php
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class Buah extends ResourceController
{
protected $modelName = 'App\Models\BuahModel';
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
$validate = $this->validation->run($data, 'buah');
$errors = $this->validation->getErrors();
if ($errors) {
    return $this->fail($errors);
}
$buah = new \App\Entities\Buah();
$buah->fill($data);
$buah->created_by = 0;
$buah->created_date = date("Y-m-d H:i:s");
if ($this->model->save($buah)) {
return $this->respondCreated($buah, 'buah created');
}
}
public function update($id = null)
{
$data = $this->request->getRawInput();
$data['idbuah'] = $id;
$validate = $this->validation->run($data, 'update_buah');
$errors = $this->validation->getErrors();
if ($errors) {
return $this->fail($errors);
}
if (!$this->model->findById($id)) {
return $this->fail('id tidak ditemukan');
}
$buah = new \App\Entities\Buah();
$buah->fill($data);
$buah->updated_by = 0;
$buah->updated_date = date("Y-m-d H:i:s");
if ($this->model->save($buah)) {
return $this->respondUpdated($buah, 'buah updated');
}
}
public function delete($id = null)
{
if (!$this->model->findById($id)) {
return $this->fail('id tidak ditemukan');
}
if ($this->model->delete($id)) {
return $this->respondDeleted(['idbuah' => $id . ' Deleted']);
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