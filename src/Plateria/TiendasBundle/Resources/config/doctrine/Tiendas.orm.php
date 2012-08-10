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
   'length' => '45',
   'columnName' => 'nombre',
  ));
$metadata->mapField(array(
   'fieldName' => 'direccion',
   'type' => 'string',
   'length' => '45',
   'columnName' => 'direccion',
  ));
$metadata->mapField(array(
   'fieldName' => 'correo',
   'type' => 'string',
   'length' => 255,
   'columnName' => 'correo',
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);