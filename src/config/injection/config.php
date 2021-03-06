<?php

return [
    // Pessoa Controller
    PessoaController::class => \DI\object('MyApplication\controller\PessoaController')
        ->constructor(\DI\get('MyApplication\model\PessoaModel')),
    
   // Pessoa Model
   MyApplication\model\PessoaModel::class => \DI\object('MyApplication\model\PessoaModel')
        ->constructor(\DI\get('MyApplication\model\Model')),

   // Model
   MyApplication\model\Model::class => \DI\object('MyApplication\model\Model'),    
];