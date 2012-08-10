<?php

namespace Plateria\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plateria\ProductoBundle\Entity\Producto
 */
class Producto
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;

    /**
     * @var string $nombre
     */
    private $nombre;

    /**
     * @var float $precio_compra
     */
    private $precio_compra;

    /**
     * @var float $precio_venta
     */
    private $precio_venta;

    /**
     * @var integer $cantidad
     */
    private $cantidad;

    /**
     * @var string $clave_producto
     */
    private $clave_producto;

    /**
     * @var string $tipo
     */
    private $tipo;

    /**
     * @var float $total_gramos
     */
    private $total_gramos;

    /**
     * @var string $imagen
     */
    private $imagen;

    /**
    * @ORM\ManyToOne(targetEntity="Plateria\CategoriasBundle\Entity\Categorias")
    * @ORM\JoinColumn(name="ciudad_id", referencedColumnName="Id")
    */
    private $categoria;

    /**
    * @ORM\ManyToOne(targetEntity="Plateria\TiendasBundle\Entity\Tiendas")
    * @ORM\JoinColumn(name="ciudad_id", referencedColumnName="Id")
    */
    private $tienda;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set precio_compra
     *
     * @param float $precioCompra
     */
    public function setPrecioCompra($precioCompra)
    {
        $this->precio_compra = $precioCompra;
    }

    /**
     * Get precio_compra
     *
     * @return float 
     */
    public function getPrecioCompra()
    {
        return $this->precio_compra;
    }

    /**
     * Set precio_venta
     *
     * @param float $precioVenta
     */
    public function setPrecioVenta($precioVenta)
    {
        $this->precio_venta = $precioVenta;
    }

    /**
     * Get precio_venta
     *
     * @return float 
     */
    public function getPrecioVenta()
    {
        return $this->precio_venta;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set clave_producto
     *
     * @param string $claveProducto
     */
    public function setClaveProducto($claveProducto)
    {
        $this->clave_producto = $claveProducto;
    }

    /**
     * Get clave_producto
     *
     * @return string 
     */
    public function getClaveProducto()
    {
        return $this->clave_producto;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set total_gramos
     *
     * @param float $totalGramos
     */
    public function setTotalGramos($totalGramos)
    {
        $this->total_gramos = $totalGramos;
    }

    /**
     * Get total_gramos
     *
     * @return float 
     */
    public function getTotalGramos()
    {
        return $this->total_gramos;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set categoria
     *
     * @param integer $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    /**
     * Get categoria
     *
     * @return integer 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set tienda
     *
     * @param integer $tienda
     */
    public function setTienda($tienda)
    {
        $this->tienda = $tienda;
    }

    /**
     * Get tienda
     *
     * @return integer 
     */
    public function getTienda()
    {
        return $this->tienda;
    }
}