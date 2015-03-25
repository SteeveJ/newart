<?php

namespace newartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ExpoController extends Controller
{

    public function booksAction()
    {
        return $this->render('newartBundle:Expo:books.html.twig');
    }

    public function expoAction()
    {
        return $this->render('newartBundle:Expo:expo.html.twig');
    }

    public function naeAction()
    {
        return $this->render('newartBundle:Expo:nae.html.twig');
    }

    public function contactAction()
    {
        return $this->render('newartBundle:Expo:contact.html.twig');
    }

    public function articlesAction()
    {
        return $this->render('newartBundle:Expo:articles.html.twig');
    }

    public function articleAction()
    {
        return $this->render('newartBundle:Expo:article.html.twig');
    }


    public function cvgAction()
    {
        return $this->render('newartBundle:Expo:cvg.html.twig');
    }
}
