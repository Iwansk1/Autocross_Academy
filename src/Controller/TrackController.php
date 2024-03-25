<?php

namespace App\Controller;

use App\Entity\Tracks;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class TrackController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/tracks', name: 'view_tracks')]
    public function viewTracks(): Response
    {
        $tracks = $this->entityManager->getRepository(Tracks::class)->findAll();

        return $this->render('track/view_tracks.html.twig', [
            'tracks' => $tracks,
        ]);
    }

    #[Route('/track/{id}', name: 'show_track')]
    public function showTrack($id): Response
    {
        $track = $this->entityManager->getRepository(Tracks::class)->find($id);

        if (!$track) {
            throw $this->createNotFoundException('Track not found');
        }

        return $this->render('track/show_track.html.twig', [
            'track' => $track,
        ]);
    }
}