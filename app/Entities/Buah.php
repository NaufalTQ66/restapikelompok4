<?php
namespace App\Entities;
use CodeIgniter\Entity\Entity;
class Buah extends Entity
{
    public function insert_buah()
    {
            {
                global $mysqli;
                $arrcheckpost = array('namabuah' => '', 'tutorialbuah' => '', 'manfaatbuah' => '',);
                $hitung = count(array_intersect_key($_POST, $arrcheckpost));
                if($hitung == count($arrcheckpost)){
                
                        $result = mysqli_query($mysqli, "INSERT INTO buah SET
                        namabuah = '$_POST[namabuah]',
                        tutorialbuah = '$_POST[tutorialbuah]',
                        manfaatbuah = '$_POST[manfaatbuah]',");
                    
                        
                        if($result)
                        {
                            $response=array(
                                'status' => 1,
                                'message' =>'buah sukses ditambah.'
                            );
                        }
                        else
                        {
                            $response=array(
                                'status' => 0,
                                'message' =>'buah Addition Failed.'
                            );
                        }
                }else{
                    $response=array(
                                'status' => 0,
                                'message' =>'Parameter Do Not Match'
                            );
                }
                header('Content-Type: application/json');
                echo json_encode($response);
            }
    }
}