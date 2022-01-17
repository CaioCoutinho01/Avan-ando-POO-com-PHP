<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino)
    {
        if ($valorATransferir > $this->saldo){
            echo "Saldo Inisponível";
            return;
        }
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

}