<?php 

abstract class PessoaAbstract {
    public $nome;
    public $idade;
    public $logradouro;
    public $cep;
    public $bairro;
    public $cidade;
    public $estado;
    public $numero;
    public $complemento;
    public $pontoReferencia;

    public function resetarPessoa() {
        $this->nome = "";
        $this->idade = "";
        $this->logradouro = "";
        $this->cep = "";
        $this->bairro = "";
        $this->cidade = "";
        $this->estado = "";
        $this->numero = "";
        $this->complemento = "";
        $this->pontoReferencia = "";

    }

    public function validarCPF($cpf){
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);

        if (strlen($cpf) != 11) {
            return false;
        }

        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }
        
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;

    }
    public function validarCNPJ($cnpj)
{
	$cnpj = preg_replace('/[^0-9]/', '', (string) $cnpj);
	
	if (strlen($cnpj) != 14)
		return false;

	if (preg_match('/(\d)\1{13}/', $cnpj))
		return false;	

	for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++)
	{
		$soma += $cnpj[$i] * $j;
		$j = ($j == 2) ? 9 : $j - 1;
	}

	$resto = $soma % 11;

	if ($cnpj[12] != ($resto < 2 ? 0 : 11 - $resto))
		return false;

	for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++)
	{
		$soma += $cnpj[$i] * $j;
		$j = ($j == 2) ? 9 : $j - 1;
	}

	$resto = $soma % 11;

	return $cnpj[13] == ($resto < 2 ? 0 : 11 - $resto);
}
}