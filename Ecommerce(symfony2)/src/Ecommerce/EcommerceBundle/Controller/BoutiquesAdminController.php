<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\UtilisateursBundle\Entity\Utilisateurs;
use Ecommerce\EcommerceBundle\Entity\Boutiques;
use Ecommerce\EcommerceBundle\Form\BoutiquesType;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Boutiques controller.
 *
 */
class BoutiquesAdminController extends Controller
{

    /**
     * Lists all Boutiques entities.
     *
     */
    public function indexAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('EcommerceBundle:Boutiques')->findBy(array('utilisateur' => $user->getId()));
        return $this->render('EcommerceBundle:Administration:Boutiques/layout/index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Boutiques entity.
     *
     */
    public function createAction(Request $request)
    {
        $user = $this->get('security.context')->getToken()->getUser();
        $entity = new Boutiques();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $entity->setUtilisateur($this->get('security.context')->getToken()->getUser());
                $entity->setDateCreation(new \DateTime());
                $entity->getImage()->setNomImage('image');
            if($entity->getLng()==null || $entity->getAtitud()==null){
                 $this->get('session')->getFlashBag()->add('success','veuillez selectionner votre position sur la map');   
                 return $this->redirect($this->generateUrl('adminBoutiques_new'));
                }
                $em->persist($entity);
                $em->flush();
                return $this->redirect($this->generateUrl('adminBoutiques_show', array('id' => $entity->getId())));
            
            }
        return $this->render('EcommerceBundle:Administration:Boutiques/layout/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Boutiques entity.
     *
     * @param Boutiques $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Boutiques $entity)
    {
        $form = $this->createForm(new BoutiquesType(), $entity, array(
            'action' => $this->generateUrl('adminBoutiques_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Boutiques entity.
     *
     */
    public function newAction()
    {
        $entity = new Boutiques();
        $form   = $this->createCreateForm($entity);
        
        
        return $this->render('EcommerceBundle:Administration:Boutiques/layout/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Boutiques entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:Boutiques')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Boutiques entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcommerceBundle:Administration:Boutiques/layout/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Boutiques entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:Boutiques')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Boutiques entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcommerceBundle:Administration:Boutiques/layout/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Boutiques entity.
    *
    * @param Boutiques $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Boutiques $entity)
    {
        $form = $this->createForm(new BoutiquesType(), $entity, array(
            'action' => $this->generateUrl('adminBoutiques_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Boutiques entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:Boutiques')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Boutiques entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        $entity->getImage()->setNomImage('image');

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('adminBoutiques_edit', array('id' => $id)));
        }

        return $this->render('EcommerceBundle:Administration:Boutiques/layout/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Boutiques entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcommerceBundle:Boutiques')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Boutiques entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('adminBoutiques'));
    }

    /**
     * Creates a form to delete a Boutiques entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adminBoutiques_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
