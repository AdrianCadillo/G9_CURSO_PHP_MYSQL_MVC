<?php
namespace clase09\interface;

interface Crud{

    /*PARA CONSULTAR DATOS */

    public function Consultar():void;

    /**PARA INSERTAR REGISTROS */
    public function Insertar(array $datos);

    /** ELIMINAR */
    public function delete($id);
}