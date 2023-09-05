<?php

namespace App\Models;

use MF\Models\Model;
use PDO;

class Info extends Model
{

    public function getInfo()
    {
        $oQuery = "select titulo, descricao from tb_info";
        return $this->db->query($oQuery)->fetchAll(PDO::FETCH_ASSOC);
    }

}