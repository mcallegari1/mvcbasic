<?php

namespace App\Models;

use MF\Models\Model;
use PDO;

class Produto extends Model
{
    public function getProdutos()
    {
        $oQuery = "select id, descricao, preco from tb_produtos";
        return $this->db->query($oQuery)->fetchAll(PDO::FETCH_ASSOC);
    }

}