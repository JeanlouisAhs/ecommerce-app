<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    public function index()
    {
        //return 'Hello World';
        dd("It's done");
    }

    /**
     * @Route("/test/{name<[A-Za-z]+>?World}", name="test",methods={"GET","POST"},host={"localhost","127.0.0.1"},schemes={"http","https"})
     */
    public function test(Request $request, $name)
    {
//        dump($request);
//        $name = $request->attributes->get('name');
        return new Response("Vous vous appelez $name");
    }
}