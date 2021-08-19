<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CatalogoController extends AbstractActionController
{
    public function listarAction()
    {
        return new ViewModel([
            "productos"=>[
            "Televisor",
            "Camara",
            "Celular"
        ],
             "titulo"=> "Listar Accion"
        ]

        );
    }

 
}
