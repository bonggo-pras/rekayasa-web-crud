<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class MakananModel extends Model
{
    protected $table = 'tbl_makanan';
     
    public function getMakanan($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }
 
}