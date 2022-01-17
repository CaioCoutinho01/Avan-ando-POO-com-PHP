<?php

namespace Alura\Banco\Modelo\Conta;


abstract class Conta
{
    private $titular;
    protected float $saldo;
    private static $numerodeContas = 0;


    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numerodeContas++;
    }


    public function __destruct()
    {
        self::$numerodeContas--;
    }



    public function saca( float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo){
            echo "saldo Indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }


    public function deposita(float $valorADepositar)
    {
        if ($valorADepositar <= 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;

    }


    public function recuperasaldo(): float
    {
        return $this->saldo;
    }

    public static function recuperaNumerodeContas(): int
    {
        return self::$numerodeContas;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    abstract protected function percentualTarifa(): float;

}


