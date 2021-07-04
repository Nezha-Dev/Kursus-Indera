<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table = 'tbl_komik';

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getKomik($slug = false)
    {
        if ($slug == false){
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}