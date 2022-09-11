<?php

class Usuario
{
    public $e_codigouser;
    public $v_nombreuser;
    public $v_passuser;
    public $e_niveluser;
    public $e_estadouser;

    public function __toString()
    {
        return 'Usuario {'.$this->e_codigouser.', '.$this->v_nombreuser.'}';
    }

}