<?php

namespace Diagnostics\Check;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use ZendDiagnostics\Check\CheckInterface;
use ZendDiagnostics\Result\Success;
use ZendDiagnostics\Result\Failure;
//use ZendDiagnostics\Result\Warning;
use \Exception;

class CheckDbAdapterMySQL implements CheckInterface, ServiceLocatorAwareInterface
{

    protected $serviceLocator;

    public function check()
    {
        try{

            if(!$this->serviceLocator->has("config")){
                throw new Exception("No existe el Service config");
            }

            $dbConfig = $this->serviceLocator->get('config');

            if(!isset($dbConfig["db"])){
                throw new Exception("No existe la Configuración de la DB");
            }

            $params = $dbConfig["db"];

            $link = mysql_connect($params['hostname'], $params['username'], $params['password']);

            if(!$link){
                throw new Exception("No hay conexion a la BD");
            }


            return new Success("Success");

        }catch(Exception $exc){
            return new Failure($exc->getMessage());
        }

    }

    public function getLabel()
    {
        return "Check Conexion MySQL";
    }


    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
    }

    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }
}
