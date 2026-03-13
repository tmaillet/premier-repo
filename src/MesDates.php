<?php

namespace Exercice;

class MesDates
{
    public function demain()
    {
        $demain = (new \DateTime('tomorrow'))->format('d-m-Y');
        return json_encode(['demain' => $demain]);
    }
}
