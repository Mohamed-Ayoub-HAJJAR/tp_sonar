<?php

use PHPUnit\Framework\TestCase;

class CalculatriceTest extends TestCase
{
    public function testAdditionner(): void
    {
        $calc = new Calculatrice();
        $this->assertEquals(5, $calc->additionner(2, 3));
    }

    public function testSoustraire(): void
    {
        $calc = new Calculatrice();
        $this->assertEquals(2, $calc->soustraire(5, 3));
    }
}