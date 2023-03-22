<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin_model extends Model
{
    public $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function loginData($email)
    {
        $builder = $this->db->table('users')->where('email', $email);
        $query = $builder->get();

        return $query->getRow();
    }

    public function insertData($data, $table)
    {
        $builder = $this->db->table($table);
        $result = $builder->insert($data);
        return $result;
    }

    public function updateData($data, $id, $table)
    {
        $builder = $this->db->table($table);
        $builder->set($data);
        $builder->where('id', $id);
        return $builder->update();
    }

    public function deleteData($id, $table)
    {
        $builder = $this->db->table($table);
        return $builder->where('id', $id)->delete();
    }

    public function getAllData($table)
    {
        $builder = $this->db->table($table);
        $query = $builder->get();
        return $query->getResult();
    }

    public function getAllDataBetter($field, $table)
    {
        $builder = $this->db->table($table)->orderBy($field, 'ASC');
        $query = $builder->get();
        return $query->getResult();
    }

    public function getDataBy($keyArr, $valArr, $table)
    {
        $builder = $this->db->table($table);
        for ($i = 0; $i < count($keyArr); $i ++) {
            $builder->where("`{$keyArr[$i]}`", $valArr[$i]);
        }
        $query = $builder->get();
        return $query->getResult();
    }

    public function getBetterWhere($field, $keyArr, $valArr, $table)
    {
        $builder = $this->db->table($table);
        for ($i = 0; $i < count($keyArr); $i ++) {
            $builder->where("`{$keyArr[$i]}`", $valArr[$i]);
        }
        $builder->orderBy($field, 'DESC');
        $query = $builder->get();
        return $query->getResult();
    }

    public function getBetterWhereLimit($field, $limit, $keyArr, $valArr, $table)
    {
        $builder = $this->db->table($table);
        for ($i = 0; $i < count($keyArr); $i ++) {
            $builder->where("`{$keyArr[$i]}`", $valArr[$i]);
        }
        $builder->orderBy($field, 'DESC')->limit($limit);
        $query = $builder->get();
        return $query->getResult();
    }

    public function findOne($id, $table)
    {
        $builder = $this->db->table($table)->where("id", $id);
        $query = $builder->get();
        return $query->getFirstRow();
    }

    public function findOneBy($value, $field, $table)
    {
        $builder = $this->db->table($table)->where("`{$field}`", $value);
        $query = $builder->get();
        return $query->getFirstRow();
    }
    public function findOneByArr($valArr, $keyArr, $table)
    {
        $builder = $this->db->table($table);
        for($i = 0; $i < count($valArr); $i ++)
        {
            $builder->where("`{$keyArr[$i]}`", $valArr[$i]);
        }
        $query = $builder->get();
        return $query->getFirstRow();
    }
}
