<?php

declare(strict_types=1);

namespace Tests\Simple;

use App\Simple\ValorVerdade;
use PHPUnit\Framework\TestCase;

/**
 * Class ValorVerdadeTest
 * @package Tests\Simple
 */
class ValorVerdadeTest extends TestCase
{
    /** @var ValorVerdade */
    private $valorVerdade;

    protected function setUp(): void
    {
        $this->valorVerdade = new ValorVerdade();
    }

    /**
     * @dataProvider validaValorVerdadeSimplesProvider
     * @param float $entrada
     * @param bool $esperado
     */
    public function testTesteSimplesRetornaUmBooleano(float $entrada, bool $esperado): void
    {
        $retorno = $this->valorVerdade->validaValorVerdadeSimples($entrada);

        $this->assertIsBool($retorno);
        $this->assertEquals($esperado, $retorno);
    }

    public function validaValorVerdadeSimplesProvider(): array
    {
        return [
            [1.0, true],
            [5.1, false],
            [2.4, true],
            [7.2, true],
            [5.3, true]
        ];
    }
}
