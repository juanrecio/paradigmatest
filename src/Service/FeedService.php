<?php

namespace App\Service;

use App\Model\Card;
use App\Model\Goal;
use App\Model\Match;
use App\Repository\ModelRepository;
use Symfony\Component\Config\Definition\Exception\Exception;

class FeedService
{
    /**
     * @var ModelRepository
     */
    private $modelRepository;

    /**
     * @var SMSService
     */
    private $sMSService;

    public function __construct(ModelRepository $modelRepository, SMSService $sMSService)
    {
        $this->modelRepository = $modelRepository;
        $this->sMSService = $sMSService;
    }


    public function processFeed(array $data)
    {
        foreach ($data as $item) {

            if (!$match = $this->modelRepository->findMatch(
                $item['team1'],
                $item['team2'],
                $item['datetime'],
                $item['location']
            )) {

                $match = new Match();
                $match->setTeams([$item['team1'], $item['team2']]);
                $match->setTime($item['datetime']);
                $match->setLocation($item['location']);
                $this->modelRepository->saveMatch($match);

            } else {


                $this->modelRepository->updateMatch($match, $data);
            }


        }
    }

    public function processMatch(array $data)
    {

        if (!$team1 = $this->modelRepository->findTeam($data['team1'])) {
            throw new Exception("team1 does not exists");
        };
        if (!$team2 = $this->modelRepository->findTeam($data['team1'])) {
            throw new Exception("team2 does not exists");
        };

        foreach ($data['players'] as $players) {

            foreach ($players as $item) {
                if ()
            }
        }
        /*...*/
        if (!$match = $this->modelRepository->findMatch(
            $team1,
            $team2,
            $data['datetime'],
            $data['location']
        )) {
            throw new Exception();
        }


        if ($data['event']['type'] === 'goal') {
            $new = true;
            foreach ($match->getGoals() as $goal) {
                if ($data['event']['time'] === $goal->getTime()) {
                    $new = false;
                    break;
                }
            }
            if ($new) {
                $goal = new Goal();
                $goal->setTime($data['event']['time']);
                $goal->setPlayer($data['event']['player']);
                $match->addGoal($goal);
                $this->sMSService->sendSMS();
            }
        } elseif ($data['event']['type'] === 'card') {
            $new = true;
            foreach ($match->getCards() as $card) {
                if ($data['event'] === $card['time']) {
                    $new = false;
                    break;
                }
            }
            if ($new) {
                $card = new Card();
                $card->setTime($data['event']['time']);
                $card->setColor($data['event']['color']);
                $card->setPlayer($data['event']['player']);
                $match->addCard($card);
            }
        }

    }

}
