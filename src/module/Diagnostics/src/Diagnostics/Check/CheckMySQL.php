<?php

namespace Diagnostics\Check;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use ZendDiagnostics\Check\CheckInterface;
use ZendDiagnostics\Result\Success;
use ZendDiagnostics\Result\Failure;
use ZendDiagnostics\Result\Warning;
use \Exception;

class CheckMySQL implements CheckInterface, ServiceLocatorAwareInterface
{

    protected $serviceLocator;

    public function check()
    {
        try{

            if(!$this->serviceLocator->has("dbAdapter")){
                return new Failure("No existe el Service dbAdapter");
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
