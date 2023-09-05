<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Models\Container;

class IndexController extends Action {

    public function index()
    {

        $dbProduto = Container::getModel('Produto');

        $produtos = $dbProduto->getProdutos();
        print_r($produtos);

        $this->render('index');
    }

    public function sobre()
    {
        $dbInfo = Container::getModel('Info');

        $info = $dbInfo->getInfo();
        print_r($info);

        $this->render('sobre');
    }
}