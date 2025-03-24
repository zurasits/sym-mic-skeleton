<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController extends AbstractController
{


    public function index(): JsonResponse
    {

        return new JsonResponse(['api' => 'ApiController index method']);
    }

}