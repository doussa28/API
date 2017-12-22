<?php
namespace AppBundle\Controller;


use AppBundle\Entity\Commission;

use FOS\RestBundle\Controller\Annotations as Rest;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;



class CommissionController extends Controller{


    /**

     * @Rest\Get("/commissions/{id_user}")

     */

    public function getCommissionAction( Request $request ){

        $commissions = $this->get('doctrine.orm.entity_manager')->getRepository('AppBundle:Commission')->findByUser( $request->get('id_user') );

    $new_style = [];  

    foreach ($commissions as $commission ) {

            $new_style[] = [

                'id' => $commission->getId(),

                'date' => $commission->getDate()->format("Y-m-d h:i:s"),

                'cashback' => $commission->getCashback(),

                'marchant' => $commission->getMerchant()->getName(),

                'user' => $commission->getUser()->getName()

            ];

        }


        return new JsonResponse($new_style);

    }

}