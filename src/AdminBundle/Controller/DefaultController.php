<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');
        $um = $this->getContainer()->get('fos_user.user_manager');

        $dbHost = 'localhost';
        $dbUser = 'root';
        $dbName = 'newart';
        $mysqli = new \mysqli($dbHost, $dbUser, '', $dbName);
        $result = $mysqli->query('SELECT * FROM sf_guard_user');
        $userSfGuard = $result->fetch_object();

        while ($userSfGuard = $result->fetch_object()) {
            $userFOS = $um->createUser();

            $userFOS->setUsername($userSfGuard->nickname);
            $userFOS->setEmail($userSfGuard->username);
            $userFOS->setPassword($userSfGuard->password);
            $userFOS->setSalt($userSfGuard->salt);

            $em->persist($userFOS);
        }
        $em->flush();
        return $this->render('newartBundle:Expo:index.html.twig');
    }
}
