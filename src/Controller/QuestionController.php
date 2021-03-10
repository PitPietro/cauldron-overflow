<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage(): Response
    {
        // return new Response('What a controller I made! I am really happy to use Annotations, too!');
        return $this->render('question/homepage.html.twig');
    }

    /**
     * @Route("/questions/{slug}")
     * @param $slug
     * @return Response
     *
     * > Rendering a Template
     * The first shortcut method is ‘render’. ‘return this->render()’ and pass two arguments.
     *     1.  filename of the template: you can put anything here, but usually you name this after our controller: ‘question/show.html.twig’.
     *     2. an array of any variables that you want to pass into the template. Eventually, you’re going to query the database for a specific question and pass that data into the template.
     */
    public function show($slug): Response
    {

        $answers = [
            'Make sure your cat is sitting perfectly still 🤣',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe... try saying the spell backwards?',
        ];

        dump($slug, $this);

        // the command below also wills the page
        // dd($slug, $this);

        /*
         * Using {...}, you can have an argument with the same name inside the () of the show function
         */
        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers
        ]);
    }
}

/*
 * The only rule of a Symfony controller is that it must return a Symfony Response object.
 * That's nice because, at the end of the day, our only job as developers is to return a response to the user.
 * But ultimately, Symfony doesn't care if you render a template, generate some JSON or do something else in order to create the Response.
 * it's not an absolute rule that a controller must return a Response - there is a way around this. It's not important now (and maybe not ever), but it is possible!
 */