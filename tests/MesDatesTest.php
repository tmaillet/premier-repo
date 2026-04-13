<?php
use PHPUnit\Framework\TestCase;
use Exercice\MesDates;

class MesDatesTest extends TestCase
{
    public function testDemainRetourneJsonEtDateCorrecte()
    {
        $o = new MesDates();
        $res = $o->demain();

        // Test 1: Est-ce du JSON ?
        $this->assertJson($res, "Le retour n'est pas un JSON valide");

        // Test 2: Contient la clé 'demain' ?
        $data = json_decode($res, true);
        $this->assertArrayHasKey('demain', $data);

        // Test 3: Est-ce bien la date de demain (d-m-Y) ?
        $dateAttendue = (new \DateTime('tomorrow'))->format('d-m-Y');
        $this->assertEquals($dateAttendue, $data['demain']);
    }
}
