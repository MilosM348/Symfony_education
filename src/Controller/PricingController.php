<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class PricingController extends AbstractController
{
    /**
     * @Route("/pricing", name="pricing")
     */
    public function index(): Response
    {
        return $this->render('pages/pricing/index.html.twig', [
        ]);
    }
}