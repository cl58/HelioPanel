<?php

namespace HelioNetworks\HelioPanelBundle;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    /**
     * Display welcome page
     */
    function home() {

        return $this->render('HelioNetworksHelioPanelBundle:Home:home.html.twig');
    }
}