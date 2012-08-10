<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'fieldName' => 'nombre',
   'type' => 'string',
   'length' => 255,
   'columnName' => 'nombre',
  ));
$metadata->mapField(array(
   'fieldName' => 'precio_compra',
   'type' => 'float',
   'columnName' => 'precio_compra',
  ));
$metadata->mapField(array(
   'fieldName' => 'precio_venta',
   'type' => 'float',
   'columnName' => 'precio_venta',
  ));
$metadata->mapField(array(
   'fieldName' => 'cantidad',
   'type' => 'integer',
   'columnName' => 'cantidad',
  ));
$metadata->mapField(array(
   'fieldName' => 'clave_producto',
   'type' => 'string',
   'length' => '45',
   'columnName' => 'clave_producto',
  ));
$metadata->mapField(array(
   'fieldName' => 'tipo',
   'type' => 'string',
   'length' => '20',
   'columnName' => 'tipo',
  ));
$metadata->mapField(array(
   'fieldName' => 'total_gramos',
   'type' => 'float',
   'columnName' => 'total_gramos',
  ));
$metadata->mapField(array(
   'fieldName' => 'imagen',
   'type' => 'string',
   'length' => 255,
   'columnName' => 'imagen',
  ));
$metadata->mapField(array(
   'fieldName' => 'categoria',
   'type' => 'integer',
   'columnName' => 'categoria',
  ));
$metadata->mapField(array(
   'fieldName' => 'tienda',
   'type' => 'integer',
   'columnName' => 'tienda',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);