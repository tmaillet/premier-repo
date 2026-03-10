<?php

namespace Exercice;

/**
 * Classe MesDates pour l'exercice du TD5.
 */
class MesDates
{
    /**
     * Retourne la date de demain au format JSON.
     *
     * @return string
     */
    public function demain(): string
    {
        $date = new \DateTime('tomorrow');
        return json_encode([
            'demain' => $date->format('d-m-Y')
        ]);
    }
}