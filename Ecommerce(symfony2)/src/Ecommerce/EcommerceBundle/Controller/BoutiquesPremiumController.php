<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ecommerce\EcommerceBundle\Entity\BoutiquesPremium;
use Ecommerce\EcommerceBundle\Form\BoutiquesPremiumType;

/**
 * BoutiquesPremium controller.
 *
 */
class BoutiquesPremiumController extends Controller
{

    /**
     * Lists all BoutiquesPremium entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcommerceBundle:BoutiquesPremium')->findAll();

        return $this->render('EcommerceBundle:SuperAdministration:BoutiquesPremium/layout/index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new BoutiquesPremium entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new BoutiquesPremium();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setDateCreation(new \DateTime());
            $entity->getImage()->setNomImage('image');
             if($entity->getLng()==null || $entity->getAtitud()==null){
                 $this->get('session')->getFlashBag()->add('success','veuillez selectionner votre position sur la map');   
                 return $this->redirect($this->generateUrl('adminBoutiquesPremium_new'));
                }
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminBoutiquesPremium_show', array('id' => $entity->getId())));
        }

        return $this->render('EcommerceBundle:SuperAdministration:BoutiquesPremium/layout/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a BoutiquesPremium entity.
     *
     * @param BoutiquesPremium $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(BoutiquesPremium $entity)
    {
        $form = $this->createForm(new BoutiquesPremiumType(), $entity, array(
            'action' => $this->generateUrl('adminBoutiquesPremium_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new BoutiquesPremium entity.
     *
     */
    public function newAction()
    {
        $entity = new BoutiquesPremium();
        $form   = $this->createCreateForm($entity);

        return $this->render('EcommerceBundle:SuperAdministration:BoutiquesPremium/layout/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a BoutiquesPremium entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:BoutiquesPremium')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BoutiquesPremium entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcommerceBundle:SuperAdministration:BoutiquesPremium/layout/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing BoutiquesPremium entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:BoutiquesPremium')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BoutiquesPremium entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcommerceBundle:SuperAdministration:BoutiquesPremium/layout/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a BoutiquesPremium entity.
    *
    * @param BoutiquesPremium $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(BoutiquesPremium $entity)
    {
        $form = $this->createForm(new BoutiquesPremiumType(), $entity, array(
            'action' => $this->generateUrl('adminBoutiquesPremium_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing BoutiquesPremium entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:BoutiquesPremium')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BoutiquesPremium entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        $entity->getImage()->setNomImage('image');

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('adminBoutiquesPremium_edit', array('id' => $id)));
        }

        return $this->render('EcommerceBundle:SuperAdministration:BoutiquesPremium/layout/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a BoutiquesPremium entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcommerceBundle:BoutiquesPremium')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find BoutiquesPremium entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('adminBoutiquesPremium'));
    }

    /**
     * Creates a form to delete a BoutiquesPremium entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adminBoutiquesPremium_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
