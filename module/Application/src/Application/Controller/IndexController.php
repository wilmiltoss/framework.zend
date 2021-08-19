<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

//1613 CONTROLADOR DEL INDEX
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    //1613 AL NOMBRAR SE OMITE EL Action
    public function holaAction(){
       // return new ViewModel(array("texto"=>"<h1>Hola mundo</h1>"));
          return new ViewModel(array("texto2"=>"<h1>Hola mundo 2</h1>"));
    }

    /*  public function listarAction(){
          //return new ViewModel();

        return [
            "productos"=>[
            "Televisor",
            "Camara",
            "Celular"
        ],
             "titulo"=> "Listar Accion"
        ];
    }*/
}
