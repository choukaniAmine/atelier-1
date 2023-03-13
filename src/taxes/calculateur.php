<?php

namespace App\taxes;

class calculateur
{
    public function prixtva($prix): float
    {
        $mtva = $prix * 0.2;
        return $mtva;
    }

    public function prixttc($prix): float
    {
        $mttc = $prix * (1 + 0.2);
        return $mttc;
    }
}
