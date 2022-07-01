<?php
namespace App\Entities;
use CodeIgniter\Entity\Entity;
class Sayur extends Entity
{
    public function insert_sayur()
    {
            {
                global $mysqli;
                $arrcheckpost = array('namasayur' => '', 'tutorialsayur' => '', 'manfaatsayur' => '',);
                $hitung = count(array_intersect_key($_POST, $arrcheckpost));
                if($hitung == count($arrcheckpost)){
                
                        $result = mysqli_query($mysqli, "INSERT INTO sayur SET
                        namasayur = '$_POST[namasayur]',
                        tutorialsayur = '$_POST[tutorialsayur]',
                        manfaatsayur = '$_POST[manfaatsayur]',");
                    
                        
                        if($result)
                        {
                            $response=array(
                                'status' => 1,
                                'message' =>'sayur sukses ditambah.'
                            );
                        }
                        else
                        {
                            $response=array(
                                'status' => 0,
                                'message' =>'sayur Addition Failed.'
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