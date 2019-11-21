<?php


use PHPUnit\Framework\TestCase;
require_once 'Model/conexion.php';
class ConexionBDTest extends TestCase
{
    protected $Conexion;
    
    public function setUp()
    {
        $this->Conexion = new Conexion();
    }
    
    public function testConeccionExitosa()
    {
        try {
            $sql = Conexion::conectar();
            $this->Fail("ERROR DE CONEXION");
        } catch (Exception $ex) {
            $this->assertEquals($ex->getMessage(), "ERROR DE CONEXION");
        }
    }
}
