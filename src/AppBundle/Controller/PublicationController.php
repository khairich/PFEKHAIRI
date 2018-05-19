<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

use AppBundle\Form\PublicationType;
use BackendBundle\Entity\Publication;

class PublicationController extends Controller
{
    private $session;

    /**
     * PublicationController constructor.
     */
    public function __construct()
    {
        $this->session = new Session();
    }

    /**
     *
     * @param Request $request
     * @return $this
     */
    public function publicationsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $publication = new Publication();
        $form = $this->createForm(PublicationType::class, $publication);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $user_media_route = 'uploads/media/'.$user->getId().'_usermedia';

                // upload image
                $file = $form['image']->getData();
                if (!empty($file) && $file != null) {
                    $ext = $file->guessExtension(); // obtencion de extension

                    if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif') {
                        $file_name = $user->getId().'_imgpublication_'.time().'.'.$ext;
                        $file->move($user_media_route.'/publications/images', $file_name);

                        $publication->setImage($file_name);
                    } else {
                        $publication->setImage(null);
                    }
                } else {
                    $publication->setImage(null);
                }

                // upload document
                $doc = $form['document']->getData();
                if (!empty($doc) && $doc != null) {
                    $ext = $doc->guessExtension(); // obtaining extension

                    if ($ext == 'pdf') {
                        $file_name = $user->getId().'_docpublication_'.time().'.'.$ext;
                        $doc->move($user_media_route.'/publications/documents', $file_name);

                        $publication->setDocument($file_name);
                    } else {
                        $publication->setDocument(null);
                    }
                } else {
                    $publication->setDocument(null);
                }

                $publication->setUser($user);
                $publication->setCreatedAt(new \DateTime("now"));

                $em->persist($publication);
                $flush = $em->flush();

                if ($flush == null) {
                    $status = 'The publication was created correctly !!';
                } else {
                    $status = 'Error adding post !!';
                }

            } else {
                $status = 'The post was not created, because the form is not valid';
            }

            $this->session->getFlashBag()->add("status", $status);
            return $this->redirectToRoute('home_publications');
        }

        $publications = $this->getPublications($request);

        return $this->render('AppBundle:Publication:home.html.twig', array(
            'form' => $form->createView(),
            'publications' => $publications
        ));
    }

    /**
     *
     * @param $request
     * @return \Knp\Component\Pager\Pagination\PaginationInterface
     */
    public function getPublications($request) {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $publication_repo = $em->getRepository('BackendBundle:Publication');
        $follow_repo = $em->getRepository('BackendBundle:Follow');

        /*
         * SELECT texto FROM sn_publication WHERE user = 4 OR
         * user IN (SELECT followed FROM sn_follow WHERE user = 4);
         */

        $following = $follow_repo->findBy(array('user' => $user));

        $following_array = array();
        foreach($following as $follow) {
            $following_array[] = $follow->getFollowed();
        }

        $query = $publication_repo->createQueryBuilder('p')
            ->where('p.user = (:user_id) OR p.user IN (:following)')
            ->setParameter('user_id', $user->getId())
            ->setParameter('following', $following_array)
            ->orderBy('p.id', 'DESC')
            ->getQuery();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1), 5
        );

        return $pagination;
    }


  /**
     *
     * @param null $id
     * @return Response
     */
    public function removePublicationAction($id = null)
    {
        $em = $this->getDoctrine()->getManager();
        $publication_repo = $em->getRepository('BackendBundle:Publication');

        $publication = $publication_repo->find($id);
        $user = $this->getUser();

        if($user->getId() == $publication->getUser()->getId()) {
            $em->remove($publication);
            $flush = $em->flush();

            if ($flush == null){
                $status = 'The publication has been successfully deleted';
            } else {
                $status = 'The publication has not been deleted';
            }
        } else {
            $status = 'The publication has not been deleted';
        }

        return new Response($status);
    }

}
