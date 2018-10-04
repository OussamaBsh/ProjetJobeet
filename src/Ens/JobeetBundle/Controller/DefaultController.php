<?php

namespace Ens\JobeetBundle\Controller;

use Ens\JobeetBundle\Entity\Affiliate;
use Ens\JobeetBundle\Entity\Category;
use Ens\JobeetBundle\Entity\Job;
use Ens\JobeetBundle\Entity\CategoryAffiliate;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Default/index.html.twig');
    }

    public function viewAction()
    {
        $advert = new Category();
        $advert->setName("xx");
        $em = $this->getDoctrine()->getManager();
        $em->persist($advert);
        $em->flush();
        return $this->render('Default/index.html.twig', array(
            'advert' => $advert
        ));
    }

    public function view2Action()
    {
        $advert = new Job();
        $advert->getId();
        $t = date("Y-m-d H:i:s");
        $advert->setEmail("ben salah Oussama");
        $advert->setCompany("SSH");
        $advert->setUrl("merci" );
        $advert->setType("IT");
        $advert->setLogo("ICI VOTRE LOGO");
        $advert->setPosition("CEO");
        $advert->setLocation("Sousse,Tunisia");
        $advert->setDescription("Nous Sommes heureux ");
        $advert->setHowToApply("Jointure");
        $advert->setToken("Tp121".$t);
        $advert->setIsPublic("Public");
        $advert->setIsActivated("active");
        $advert->setExpiresAt(new \DateTime("2018-10-24 00:00:00"));
        //$advert->setCreatedAt("cree at");
        $advert->setUpdatedAt(new \DateTime("2018-10-24 00:00:00"));
        $em = $this->getDoctrine()->getManager();
        $em->persist($advert);
        $em->flush();
        return $this->render('Default/index.html.twig', array(
            'advert' => $advert
        ));
    }


    public function view3Action()
    {
        $advert = new Affiliate();
        $t = date("Y-m-d H:i:s");
        $advert->setUrl("/NouveauUrl");
        $advert->setEmail("oussama.bsh@gmail.com".$t);
        $advert->setToken("uniqueToken".$t);
        $advert->setCreatedAt(new \DateTime("2018-10-24 00:00:00"));

        /*$advert->setEmail("ben salah Oussama");
        $advert->setCompany("SSH");
        $advert->setUrl("merci" );
        $advert->setType("IT");
        $advert->setLogo("ICI VOTRE LOGO");
        $advert->setPosition("CEO");
        $advert->setLocation("Sousse,Tunisia");
        $advert->setDescription("Nous Sommes heureux ");
        $advert->setHowToApply("Jointure");
        $advert->setToken("Tp121".$t);
        $advert->setIsPublic("Public");
        $advert->setIsActivated("active");
        $advert->setExpiresAt(new \DateTime("2018-10-24 00:00:00"));
        //$advert->setCreatedAt("cree at");
        $advert->setUpdatedAt(new \DateTime("2018-10-24 00:00:00"));*/
        $em = $this->getDoctrine()->getManager();
        $em->persist($advert);
        $em->flush();
        return $this->render('Default/index.html.twig', array(
            'advert' => $advert
        ));
    }
}

