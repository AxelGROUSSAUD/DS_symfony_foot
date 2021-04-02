<?php


namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Joueur;

class JoueurTest extends TestCase
{
    public function testdureeJoueur()
    {
        $joueur= new Joueur();
        $joueur->setDateEntree( date_create('now'));
        $duree = $joueur->dureeJoueur();
        $this->assertEquals('0 days',$duree,'Error : Incorrect value');

        $joueur->setDateEntree( );
        $duree = $joueur->dureeJoueur();
    }
}