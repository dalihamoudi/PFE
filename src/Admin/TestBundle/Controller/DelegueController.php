<?php

namespace Admin\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Admin\TestBundle\Entity\Delegue;
use Admin\TestBundle\Form\DelegueType;

/**
 * Delegue controller.
 *
 * @Route("/delegue")
 */
class DelegueController extends Controller
{

    /**
     * Lists all Delegue entities.
     *
     * @Route("/", name="delegue")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminTestBundle:Delegue')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Delegue entity.
     *
     * @Route("/", name="delegue_create")
     * @Method("POST")
     * @Template("AdminTestBundle:Delegue:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Delegue();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('delegue_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Delegue entity.
     *
     * @param Delegue $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Delegue $entity)
    {
        $form = $this->createForm(new DelegueType(), $entity, array(
            'action' => $this->generateUrl('delegue_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Delegue entity.
     *
     * @Route("/new", name="delegue_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Delegue();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Delegue entity.
     *
     * @Route("/{id}", name="delegue_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminTestBundle:Delegue')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Delegue entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Delegue entity.
     *
     * @Route("/{id}/edit", name="delegue_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminTestBundle:Delegue')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Delegue entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Delegue entity.
    *
    * @param Delegue $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Delegue $entity)
    {
        $form = $this->createForm(new DelegueType(), $entity, array(
            'action' => $this->generateUrl('delegue_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Delegue entity.
     *
     * @Route("/{id}", name="delegue_update")
     * @Method("PUT")
     * @Template("AdminTestBundle:Delegue:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminTestBundle:Delegue')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Delegue entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('delegue_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Delegue entity.
     *
     * @Route("/{id}", name="delegue_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminTestBundle:Delegue')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Delegue entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('delegue'));
    }

    /**
     * Creates a form to delete a Delegue entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('delegue_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
