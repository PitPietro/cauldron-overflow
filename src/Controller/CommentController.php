<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

// https://symfonycasts.com/screencast/symfony/json-api#play
class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction}")
     */
    public function commentVote($id, $direction)
    {
        // use if to query the database

        // the equality operator (==) will attempt to make the data types the same before proceeding
        // the identity operator (===) requires both data types to be the same, as a prerequisite.
        if ($direction === 'up') {
            $currentVoteCount = rand(51, 100);
        } else {
            $currentVoteCount = rand(0, 50);
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

