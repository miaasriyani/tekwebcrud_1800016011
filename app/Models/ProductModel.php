<?php namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = "product";

    public function getProduct($id = false)
    {
        if($id === false){
            return $this->table('user_id')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('products')
                        ->where('user_id', $id)
                        ->get()
                        ->getRowArray();

    public function insert_product($data)
    {

    public function delete_product($id)
{
    return $this->db->table($this->table)->delete(['user_id' => $id]);
} 

    return $this->db->table($this->table)->insert($data);
} 
        }   
    } 
}