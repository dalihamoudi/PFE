<?php

namespace Admin\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Admin\TestBundle\Entity\DepenceBudget;
use Admin\TestBundle\Form\DepenceBudgetType;

/**
 * DepenceBudget controller.
 *
 * @Route("/depencebudget")
 */
class DepenceBudgetController extends Controller
{

    /**
     * Lists all DepenceBudget entities.
     *
     * @Route("/", name="depencebudget")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminTestBundle:DepenceBudget')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new DepenceBudget entity.
     *
     * @Route("/", name="depencebudget_create")
     * @Method("POST")
     * @Template("AdminTestBundle:DepenceBudget:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new DepenceBudget();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('depencebudget_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a DepenceBudget entity.
     *
     * @param DepenceBudget $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(DepenceBudget $entity)
    {
        $form = $this->createForm(new DepenceBudgetType(), $entity, array(
            'action' => $this->generateUrl('depencebudget_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new DepenceBudget entity.
     *
     * @Route("/new", name="depencebudget_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new DepenceBudget();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a DepenceBudget entity.
     *
     * @Route("/{id}", name="depencebudget_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminTestBundle:DepenceBudget')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DepenceBudget entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing DepenceBudget entity.
     *
     * @Route("/{id}/edit", name="depencebudget_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminTestBundle:DepenceBudget')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DepenceBudget entity.');
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
    * Creates a form to edit a DepenceBudget entity.
    *
    * @param DepenceBudget $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(DepenceBudget $entity)
    {
        $form = $this->createForm(new DepenceBudgetType(), $entity, array(
            'action' => $this->generateUrl('depencebudget_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing DepenceBudget entity.
     *
     * @Route("/{id}", name="depencebudget_update")
     * @Method("PUT")
     * @Template("AdminTestBundle:DepenceBudget:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminTestBundle:DepenceBudget')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find DepenceBudget entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('depencebudget_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a DepenceBudget entity.
     *
     * @Route("/{id}", name="depencebudget_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminTestBundle:DepenceBudget')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find DepenceBudget entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('depencebudget'));
    }

    /**
     * Creates a form to delete a DepenceBudget entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('depencebudget_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
