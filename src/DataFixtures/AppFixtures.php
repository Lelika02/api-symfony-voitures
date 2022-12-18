<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Voiture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Création de 12 voitures
        for ($i = 0; $i < 12; $i++) {
            $voiture = new Voiture();
            $voiture->setLibelle('VOITURE'.$i);
            $voiture->setDescription(
                'La meilleure voiture de tous les voiture de la NC');
            $voiture->setPrix(5000000);
            $voiture->setCategorie("CITADINE");
            $voiture->setImage("https://www.ford.fr/content/dam/guxeu/global-shared/vehicle-images/nameplate-derivatives/focus/2022-lhd/ford-focus-st.png.renditions.original.png");

            $manager->persist($voiture);
        }

        $manager->flush();
    }
}
