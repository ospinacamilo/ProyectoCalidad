<?php


use PHPUnit\Framework\TestCase;
require_once 'Model/conexion.php';
require_once 'Model/productosModel/productosModel.php';
class ExceptionsTest extends TestCase
{
    protected $datosController;
    
    public function setUp()
    {
        $this->datosController = array("nombreproducto"=>'producto prueba',
            "idcategoria"=>'8',
            "idusuario"=>'1',
            "precio"=>'20000');
    }
    
    public function testFailedForInvalidID(){
        $this->datosController['idproducto'] = 'a';
        $this->expectException(InvalidArgumentException::class);
        ProductosModel::deleteProductosModel($this->datosController, 'productos');
    }
    public function testPassedValidID(){
        $this->datosController['idproducto'] = 999;
        $this->assertThat(
            ProductosModel::deleteProductosModel($this->datosController, 'productos'),
            $this->equalTo(
                'success'
                )
            );
    }
    public function tearDown()
    {
        unset($this->datosController);
    }
   
}
