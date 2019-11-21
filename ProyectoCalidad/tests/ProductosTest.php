<?php


use PHPUnit\Framework\TestCase;
require_once 'Model/conexion.php';
require_once 'Model/productosModel/productosModel.php';
class ProductsTest extends TestCase
{
    protected $datosController;
    
    public function setUp()
    {
        $this->datosController = array("nombreproducto"=>'producto prueba',
            "idcategoria"=>'8',
            "idusuario"=>'1',
            "precio"=>'20000');
    }
    
    public function testCreacionProducto()
    {
        try {
            $respuesta = ProductosModel::agregarProductosModel($this->datosController, 'productos');
            $this->assertEquals($respuesta, 'success');
        } catch (Exception $ex) {
            $this->assertEquals($ex->getMessage(), "error");
        }
    }
    public function testFailCreacion()
    {
        try {
            $this->datosController['nombreproducto'] = null;
            $respuesta = ProductosModel::agregarProductosModel($this->datosController, 'productos');
            $this->fail($respuesta, 'error');
        } catch (PDOException $ex) {
            $this->assertNotEmpty($ex->getMessage());
        }
       
    }
    public function tearDown()
    {
        unset($this->datosController);
    }
    
}
