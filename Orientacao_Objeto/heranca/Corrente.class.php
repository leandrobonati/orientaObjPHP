<?php
class Corrente
{
	public function __construct(private float $limite = 0.00) {}

	public function getLimite(): float
	{
		return $this->limite;
	}

	public function setLimite(float $limite): void
	{
		$this->limite = $limite;
	}
}

class ContaCorrente extends Corrente
{
	private float $saldo;

	public function __construct(float $limite = 0.00, float $saldo = 0.00)
	{
		parent::__construct($limite);
		$this->saldo = $saldo;
	}

	public function getSaldo(): float
	{
		return $this->saldo;
	}

	public function depositar(float $valor): void
	{
		if ($valor > 0) {
			$this->saldo += $valor;
		}
	}

	public function sacar(float $valor): bool
	{
		if ($valor > 0 && $valor <= $this->saldo + $this->getLimite()) {
			$this->saldo -= $valor;
			return true;
		}
		return false;
	}
}
?>