<?php

namespace App\Controller;

use App\Service\FeedService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FeedController extends Controller
{
    /**
     * @var FeedService
     */
    private $feedService;

    public function __construct(FeedService $feedService)
    {
        $this->feedService = $feedService;
    }

    /**
     * @Route("/feed/fixtures", name="feed_fixtures")
     * @Method("POST")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function fixtures(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $this->feedService->processReport($data);

        return $this->json(
            [
                'message' => 'Fixtures feed saved',
                'path' => 'src/Controller/FeedController.php',
            ]
        );
    }

    /**
     * @Route("/feed/match", name="feed_match")
     * @Method("POST")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function match(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $this->feedService->processReport($data);

        return $this->json(
            [
                'message' => 'Match updated',
                'path' => 'src/Controller/FeedController.php',
            ]
        );
    }
}
