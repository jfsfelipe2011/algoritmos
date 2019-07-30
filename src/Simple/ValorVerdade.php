<?php

declare(strict_types=1);

namespace App\Simple;

/**
 * Class ValorVerdade
 * Essa classe contém algoritmos simples com testes de valor-verdade
 * @package App\Simple
 */
class ValorVerdade
{
    /**
     * Método de teste do exercício 1.1 - 11 do livro "Fundamentos matemáticos para a ciência da computação"
     * @param float $numero
     * @return bool
     */
    public function validaValorVerdadeSimples(float $numero): bool
    {
        return ($numero < 5.0 && 2 * $numero < 10.7) || sqrt(5 * $numero) > 5.1;
    }
}
