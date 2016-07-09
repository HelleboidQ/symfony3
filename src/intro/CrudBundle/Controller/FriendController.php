<?php

namespace intro\CrudBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use intro\CrudBundle\Entity\Friend;
use intro\CrudBundle\Form\FriendType;

/**
 * Friend controller.
 *
 */
class FriendController extends Controller
{
    /**
     * Lists all Friend entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $friends = $em->getRepository('introCrudBundle:Friend')->findAll();

        return $this->render('friend/index.html.twig', array(
            'friends' => $friends,
        ));
    }

    /**
     * Creates a new Friend entity.
     *
     */
    public function newAction(Request $request)
    {
        $friend = new Friend();
        $form = $this->createForm('intro\CrudBundle\Form\FriendType', $friend);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($friend);
            $em->flush();

            return $this->redirectToRoute('friend_show', array('id' => $friend->getId()));
        }

        return $this->render('friend/new.html.twig', array(
            'friend' => $friend,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Friend entity.
     *
     */
    public function showAction(Friend $friend)
    {
        $deleteForm = $this->createDeleteForm($friend);

        return $this->render('friend/show.html.twig', array(
            'friend' => $friend,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Friend entity.
     *
     */
    public function editAction(Request $request, Friend $friend)
    {
        $deleteForm = $this->createDeleteForm($friend);
        $editForm = $this->createForm('intro\CrudBundle\Form\FriendType', $friend);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($friend);
            $em->flush();

            return $this->redirectToRoute('friend_edit', array('id' => $friend->getId()));
        }

        return $this->render('friend/edit.html.twig', array(
            'friend' => $friend,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Friend entity.
     *
     */
    public function deleteAction(Request $request, Friend $friend)
    {
        $form = $this->createDeleteForm($friend);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($friend);
            $em->flush();
        }

        return $this->redirectToRoute('friend_index');
    }

    /**
     * Creates a form to delete a Friend entity.
     *
     * @param Friend $friend The Friend entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Friend $friend)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('friend_delete', array('id' => $friend->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
