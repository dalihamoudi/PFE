<?php

namespace Admin\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Admin\TestBundle\Entity\Diplome;
use Admin\TestBundle\Form\DiplomeType;

/**
 * Diplome controller.
 *
 * @Route("/diplome")
 */
class DiplomeController extends Controller
{

    /**
     * Lists all Diplome entities.
     *
     * @Route("/", name="diplome")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminTestBundle:Diplome')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Diplome entity.
     *
     * @Route("/", name="diplome_create")
     * @Method("POST")
     * @Template("AdminTestBundle:Diplome:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Diplome();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('diplome_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Diplome entity.
     *
     * @param Diplome $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Diplome $entity)
    {
        $form = $this->createForm(new DiplomeType(), $entity, array(
            'action' => $this->generateUrl('diplome_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Diplome entity.
     *
     * @Route("/new", name="diplome_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Diplome();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Diplome entity.
     *
     * @Route("/{id}", name="diplome_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminTestBundle:Diplome')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Diplome entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Diplome entity.
     *
     * @Route("/{id}/edit", name="diplome_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminTestBundle:Diplome')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Diplome entity.');
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
    * Creates a form to edit a Diplome entity.
    *
    * @param Diplome $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Diplome $entity)
    {
        $form = $this->createForm(new DiplomeType(), $entity, array(
            'action' => $this->generateUrl('diplome_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Diplome entity.
     *
     * @Route("/{id}", name="diplome_update")
     * @Method("PUT")
     * @Template("AdminTestBundle:Diplome:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminTestBundle:Diplome')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Diplome entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('diplome_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Diplome entity.
     *
     * @Route("/{id}", name="diplome_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminTestBundle:Diplome')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Diplome entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('diplome'));
    }

    /**
     * Creates a form to delete a Diplome entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('diplome_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
