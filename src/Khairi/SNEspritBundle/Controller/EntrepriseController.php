<?php

namespace Khairi\SNEspritBundle\Controller;

use Khairi\SNEspritBundle\Entity\Entreprise;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Entreprise controller.
 *
 */
class EntrepriseController extends Controller
{
    /**
     * Lists all entreprise entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser()->getId();
        $etudiant = $em->getRepository('BackendBundle:User')->find($user);
        $entreprises = $em->getRepository('KhairiSNEspritBundle:Entreprise')->findAll();

        return $this->render('entreprise/index.html.twig', array(
            'entreprises' => $entreprises,
            'etudiant'=>$etudiant,
        ));
    }

    /**
     * Creates a new entreprise entity.
     *
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser()->getId();
        $etudiant = $em->getRepository('BackendBundle:User')->find($user);
        $entreprise = new Entreprise();
        $form = $this->createForm('Khairi\SNEspritBundle\Form\EntrepriseType', $entreprise);
        $form->handleRequest($request);
        $entreprise->setIdEntreprise($user);
        $entreprise->setDate(new \DateTime("now"));
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entreprise);
            $em->flush();

            return $this->redirectToRoute('entreprise_show', array('id' => $entreprise->getId()));
        }

        return $this->render('entreprise/new.html.twig', array(
            'entreprise' => $entreprise,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a entreprise entity.
     *
     */
    public function showAction(Entreprise $entreprise)
    {
        $deleteForm = $this->createDeleteForm($entreprise);

        return $this->render('entreprise/show.html.twig', array(
            'entreprise' => $entreprise,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing entreprise entity.
     *
     */
    public function editAction(Request $request, Entreprise $entreprise)
    {
        $deleteForm = $this->createDeleteForm($entreprise);
        $editForm = $this->createForm('Khairi\SNEspritBundle\Form\EntrepriseType', $entreprise);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('entreprise_edit', array('id' => $entreprise->getId()));
        }

        return $this->render('entreprise/edit.html.twig', array(
            'entreprise' => $entreprise,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a entreprise entity.
     *
     */
    public function deleteAction(Request $request, Entreprise $entreprise)
    {
        $form = $this->createDeleteForm($entreprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($entreprise);
            $em->flush();
        }

        return $this->redirectToRoute('entreprise_index');
    }

    /**
     * Creates a form to delete a entreprise entity.
     *
     * @param Entreprise $entreprise The entreprise entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Entreprise $entreprise)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('entreprise_delete', array('id' => $entreprise->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
