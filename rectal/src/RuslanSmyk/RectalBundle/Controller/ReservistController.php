<?php

namespace RuslanSmyk\RectalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use RuslanSmyk\RectalBundle\Entity\Reservist;
use RuslanSmyk\RectalBundle\Form\ReservistType;

/**
 * Reservist controller.
 *
 */
class ReservistController extends Controller
{

    /**
     * Lists all Reservist entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RuslanSmykRectalBundle:Reservist')->findAll();

        return $this->render('RuslanSmykRectalBundle:Reservist:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Reservist entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Reservist();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('reservist_show', array('id' => $entity->getId())));
        }

        return $this->render('RuslanSmykRectalBundle:Reservist:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Reservist entity.
    *
    * @param Reservist $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Reservist $entity)
    {
        $form = $this->createForm(new ReservistType(), $entity, array(
            'action' => $this->generateUrl('reservist_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Reservist entity.
     *
     */
    public function newAction()
    {
        $entity = new Reservist();
        $form   = $this->createCreateForm($entity);

        return $this->render('RuslanSmykRectalBundle:Reservist:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Reservist entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RuslanSmykRectalBundle:Reservist')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reservist entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RuslanSmykRectalBundle:Reservist:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Reservist entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RuslanSmykRectalBundle:Reservist')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reservist entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RuslanSmykRectalBundle:Reservist:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Reservist entity.
    *
    * @param Reservist $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Reservist $entity)
    {
        $form = $this->createForm(new ReservistType(), $entity, array(
            'action' => $this->generateUrl('reservist_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Reservist entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RuslanSmykRectalBundle:Reservist')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reservist entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('reservist_edit', array('id' => $id)));
        }

        return $this->render('RuslanSmykRectalBundle:Reservist:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Reservist entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RuslanSmykRectalBundle:Reservist')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Reservist entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('reservist'));
    }

    /**
     * Creates a form to delete a Reservist entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reservist_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
