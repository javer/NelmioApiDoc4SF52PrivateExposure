<?php

namespace App\Controller;

use App\DTO\ResponseDTO;
use Nelmio\ApiDocBundle\Annotation as ApiDoc;
use OpenApi\Annotations as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * Index.
     *
     * @return JsonResponse
     *
     * @Route("/", name="index", methods={"GET"})
     *
     * @OA\Response(response="200", description="OK", @ApiDoc\Model(type=ResponseDTO::class))
     */
    public function index(): JsonResponse
    {
        return $this->json(new ResponseDTO('publicValue', 'privateValue'));
    }
}
