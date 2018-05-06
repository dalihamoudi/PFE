<?php

namespace Admin\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Admin\TestBundle\Entity\cmd;
use Admin\TestBundle\Form\cmdType;

/**
 * cmd controller.
 *
 * @Route("/cmd")
 */
class cmdController extends Controller
{

    /**
     * Lists all cmd entities.
     *
     * @Route("/", name="cmd")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminTestBundle:cmd')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new cmd entity.
     *
     * @Route("/", name="cmd_create")
     * @Method("POST")
     * @Template("AdminTestBundle:cmd:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new cmd();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cmd', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a cmd entity.
     *
     * @param cmd $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(cmd $entity)
    {
        $form = $this->createForm(new cmdType(), $entity, array(
            'action' => $this->generateUrl('cmd_create'),
            'method' => 'POST',
        ));



        return $form;
    }

    /**
     * Displays a form to create a new cmd entity.
     *
     * @Route("/new", name="cmd_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new cmd();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }
//this Route to Show Page_Ajouter with Design
    /**
     * Displays a form to create a new cmd entity.
     *
     * @Route("/newD", name="cmd_newD")
     * @Method("GET")
     * @Template()
     */
    public function newDAction()
    {
        $entity = new cmd();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }


    /**
     * Finds and displays a cmd entity.
     *
     * @Route("/{id}", name="cmd_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminTestBundle:cmd')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cmd entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing cmd entity.
     *
     * @Route("/edit/{id}", name="cmd_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminTestBundle:cmd')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cmd entity.');
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
    * Creates a form to edit a cmd entity.
    *
    * @param cmd $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(cmd $entity)
    {
        $form = $this->createForm(new cmdType(), $entity, array(
            'action' => $this->generateUrl('cmd_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing cmd entity.
     *
     * @Route("/{id}", name="cmd_update")
     * @Method("PUT")
     * @Template("AdminTestBundle:cmd:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminTestBundle:cmd')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cmd entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cmd_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a cmd entity.
     *
     * @Route("/{id}", name="cmd_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminTestBundle:cmd')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find cmd entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cmd'));
    }

    /**
     * Creates a form to delete a cmd entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cmd_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
