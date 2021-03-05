<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage(): Response
    {
        return new Response('What a controller I made! I am really happy to use Annotations, too!');
    }

    /**
     * @Route("/questions/{slug}")
     * @param $slug
     * @return Response
     */
    public function show($slug): Response
    {
        /*
         * Using {...}, you can have an argument with the same name inside the () of the show function
         */
        return new Response(sprintf(
            'The wildcard of the annotation is: %s',
            ucwords(str_replace('-', ' ', $slug))
        ));
    }
}

/*
 * The only rule of a Symfony controller is that it must return a Symfony Response object.
 * That's nice because, at the end of the day, our only job as developers is to return a response to the user.
 * But ultimately, Symfony doesn't care if you render a template, generate some JSON or do something else in order to create the Response.
 * it's not an absolute rule that a controller must return a Response - there is a way around this. It's not important now (and maybe not ever), but it is possible!
 */