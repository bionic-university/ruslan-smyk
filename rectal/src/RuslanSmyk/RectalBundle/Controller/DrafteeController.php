<?php

namespace RuslanSmyk\RectalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use RuslanSmyk\RectalBundle\Entity\Draftee;
use RuslanSmyk\RectalBundle\Form\DrafteeType;

/**
 * Draftee controller.
 *
 */
class DrafteeController extends Controller
{

    /**
     * Lists all Draftee entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RuslanSmykRectalBundle:Draftee')->findAll();

        return $this->render('RuslanSmykRectalBundle:Draftee:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Draftee entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Draftee();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('draftee_show', array('id' => $entity->getId())));
        }

        return $this->render('RuslanSmykRectalBundle:Draftee:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Draftee entity.
    *
    * @param Draftee $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Draftee $entity)
    {

        $entity->setBirthday(new \DateTime('2000-10-10'));

        $form = $this->createForm(new DrafteeType(), $entity, array(
            'action' => $this->generateUrl('draftee_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Draftee entity.
     *
     */
    public function newAction()
    {
        $entity = new Draftee();

        $form = $this->createCreateForm($entity);


       /* $form = $this->createFormBuilder($entity)
            ->add('birthday', 'date')
            ->getForm();
        */

        return $this->render('RuslanSmykRectalBundle:Draftee:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Draftee entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RuslanSmykRectalBundle:Draftee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Draftee entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RuslanSmykRectalBundle:Draftee:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Draftee entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RuslanSmykRectalBundle:Draftee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Draftee entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RuslanSmykRectalBundle:Draftee:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Draftee entity.
    *
    * @param Draftee $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Draftee $entity)
    {
        $form = $this->createForm(new DrafteeType(), $entity, array(
            'action' => $this->generateUrl('draftee_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Draftee entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RuslanSmykRectalBundle:Draftee')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Draftee entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('draftee_edit', array('id' => $id)));
        }

        return $this->render('RuslanSmykRectalBundle:Draftee:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Draftee entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RuslanSmykRectalBundle:Draftee')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Draftee entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('draftee'));
    }

    /**
     * Creates a form to delete a Draftee entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('draftee_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
