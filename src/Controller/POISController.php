<?php

namespace App\Controller;

use App\Entity\POIS;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class POISController extends AbstractController
{
    private $entityManager;

    //* Constructor to inject the entity manager dependency
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/pois', name: 'POIS')]
    public function addPOIS(EntityManagerInterface $entityManager): Response
    {

        $pois1 = new POIS();
        $pois1->setPOISID(1);
        $pois1->setTrackID(1);

        $this->entityManager->persist($pois1);

        $this->entityManager->flush();
        return new Response('Saved new product with id '.$pois1->getId());
    }
}
