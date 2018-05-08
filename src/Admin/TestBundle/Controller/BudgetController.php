<?php

namespace Admin\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Admin\TestBundle\Entity\Budget;
use Admin\TestBundle\Form\BudgetType;

/**
 * Budget controller.
 *
 * @Route("/budget")
 */
class BudgetController extends Controller
{

    /**
     * Lists all Budget entities.
     *
     * @Route("/", name="budget")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminTestBundle:Budget')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Budget entity.
     *
     * @Route("/", name="budget_create")
     * @Method("POST")
     * @Template("AdminTestBundle:Budget:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Budget();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('budget_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Budget entity.
     *
     * @param Budget $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Budget $entity)
    {
        $form = $this->createForm(new BudgetType(), $entity, array(
            'action' => $this->generateUrl('budget_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Budget entity.
     *
     * @Route("/new", name="budget_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Budget();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Budget entity.
     *
     * @Route("/{id}", name="budget_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminTestBundle:Budget')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Budget entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Budget entity.
     *
     * @Route("/{id}/edit", name="budget_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminTestBundle:Budget')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Budget entity.');
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
    * Creates a form to edit a Budget entity.
    *
    * @param Budget $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Budget $entity)
    {
        $form = $this->createForm(new BudgetType(), $entity, array(
            'action' => $this->generateUrl('budget_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Budget entity.
     *
     * @Route("/{id}", name="budget_update")
     * @Method("PUT")
     * @Template("AdminTestBundle:Budget:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminTestBundle:Budget')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Budget entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('budget_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Budget entity.
     *
     * @Route("/{id}", name="budget_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminTestBundle:Budget')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Budget entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('budget'));
    }

    /**
     * Creates a form to delete a Budget entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('budget_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
