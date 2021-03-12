<?php


namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

// https://symfonycasts.com/screencast/symfony/json-api#play
class CommentController extends AbstractController
{
    /**
     * <\d+> is a regular expression that matches a digit of any length. It won't be used at the moment
     * <up|down> is a regular expressions that only accept 'direction' to be "up" or "down"
     *
     * 'methods' tells which methods can access this route API endpoint (a GET will throw a 405 error).
     *
     * Thanks to the logger, you can see all the logging messages in the "Logs" section of the "Profiler"
     *
     * @Route("/comments/{id}/vote/{direction<up|down>}", methods="POST")
     */
    public function commentVote($id, $direction, LoggerInterface $logger)
    {
        // use if to query the database

        // the equality operator (==) will attempt to make the data types the same before proceeding
        // the identity operator (===) requires both data types to be the same, as a prerequisite.
        if ($direction === 'up') {
            $currentVoteCount = rand(51, 100);
            $logger->info('vote UP --> ' . $currentVoteCount);
        } else {
            $currentVoteCount = rand(0, 50);
            $logger->info('vote DOWN --> ' . $currentVoteCount);
        }

        // the API endpoint is at https://localhost:8000/comments/10/vote/up for the if clause
        // https://localhost:8000/comments/10/vote/placeholder for the else clause
        // (replace 'placeholder' with any words != from 'up'
        // you can replace 10 with any other number

        return $this->json(['votes' => $currentVoteCount]);
        // return $this->json(['id' => $id, 'votes' => $currentVoteCount]);
        // same as: return new JsonResponse(['id' => $id, 'votes' => $currentVoteCount]);
    }
}

