<?php
use clase08\logica\Curso as LogicaCurso;
use clase08\model\Curso;

require 'model/Curso.php';
require 'logica/Curso.php';

$curso = new Curso;

$curso->registrarCurso();

$cursologica = new LogicaCurso;

$cursologica->store();