<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\TournamentEntry;

class ResultsController extends AbstractController
{
    #[Route('/results/{id}')]
    function single($id): Response
    {
        $results = $this->getRounds();

        return $this->render('results/single.html.twig', [
            'results' => $results[$id],
        ]);
    }

    function getRounds(): array
    {
        return [
            // Round 1
            [
                new TournamentEntry("Tiger", 11, 5, "Lukas", "13.09.2023"),
                new TournamentEntry("Lion", 12, 4, "Sophie", "13.09.2023"),
                new TournamentEntry("Eagle", 10, 6, "Michael", "13.09.2023"),
            ],

            // Round 2
            [
                new TournamentEntry("Hawk", 9, 7, "Emily", "14.09.2023"),
                new TournamentEntry("Falcon", 11, 5, "Daniel", "14.09.2023"),
                new TournamentEntry("Condor", 10, 6, "Olivia", "14.09.2023"),
            ],

            // Round 3
            [
                new TournamentEntry("Sparrow", 8, 8, "Aiden", "15.09.2023"),
                new TournamentEntry("Raven", 12, 4, "Sophia", "15.09.2023"),
                new TournamentEntry("Owl", 9, 7, "Jackson", "15.09.2023"),
            ],
        ];
    }
}