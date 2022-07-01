<?php
namespace App\Entities;
use CodeIgniter\Entity\Entity;
class Tanamanlain extends Entity
{
    public function insert_tanamanlain()
    {
            {
                global $mysqli;
                $arrcheckpost = array('namatanamanlain' => '', 'tutorialtanamanlain' => '', 'manfaattanamanlain' => '',);
                $hitung = count(array_intersect_key($_POST, $arrcheckpost));
                if($hitung == count($arrcheckpost)){
                
                        $result = mysqli_query($mysqli, "INSERT INTO tanamanlain SET
                        namatanamanlain = '$_POST[namatanamanlain]',
                        tutorialtanamanlain = '$_POST[tutorialtanamanlain]',
                        manfaattanamanlain = '$_POST[manfaattanamanlain]',");
                    
                        
                        if($result)
                        {
                            $response=array(
                                'status' => 1,
                                'message' =>'user sukses ditambah.'
                            );
                        }
                        else
                        {
                            $response=array(
                                'status' => 0,
                                'message' =>'user Addition Failed.'
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