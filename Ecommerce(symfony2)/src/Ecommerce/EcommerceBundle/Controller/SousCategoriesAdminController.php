<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ecommerce\EcommerceBundle\Entity\SousCategories;
use Ecommerce\EcommerceBundle\Form\SousCategoriesType;

/**
 * SousCategories controller.
 *
 */
class SousCategoriesAdminController extends Controller
{

    /**
     * Lists all SousCategories entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcommerceBundle:SousCategories')->findAll();

        return $this->render('EcommerceBundle:Administration:SousCategories/layout/index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new SousCategories entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new SousCategories();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->getImage()->setNomImage('image');

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminSousCategories_show', array('id' => $entity->getId())));
        }

        return $this->render('EcommerceBundle:Administration:SousCategories/layout/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a SousCategories entity.
     *
     * @param SousCategories $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(SousCategories $entity)
    {
        $form = $this->createForm(new SousCategoriesType(), $entity, array(
            'action' => $this->generateUrl('adminSousCategories_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new SousCategories entity.
     *
     */
    public function newAction()
    {
        $entity = new SousCategories();
        $form   = $this->createCreateForm($entity);

        return $this->render('EcommerceBundle:Administration:SousCategories/layout/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a SousCategories entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:SousCategories')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SousCategories entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcommerceBundle:Administration:SousCategories/layout/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing SousCategories entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:SousCategories')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SousCategories entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcommerceBundle:Administration:SousCategories/layout/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a SousCategories entity.
    *
    * @param SousCategories $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(SousCategories $entity)
    {
        $form = $this->createForm(new SousCategoriesType(), $entity, array(
            'action' => $this->generateUrl('adminSousCategories_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing SousCategories entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:SousCategories')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SousCategories entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        $entity->getImage()->setNomImage('image');
        
        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('adminSousCategories_edit', array('id' => $id)));
        }

        return $this->render('EcommerceBundle:Administration:SousCategories/layout/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a SousCategories entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcommerceBundle:SousCategories')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find SousCategories entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('adminSousCategories'));
    }

    /**
     * Creates a form to delete a SousCategories entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adminSousCategories_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
