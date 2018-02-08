<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ecommerce\EcommerceBundle\Entity\categories;
use Ecommerce\EcommerceBundle\Form\categoriesType;

/**
 * categories controller.
 *
 */
class categoriesAdminController extends Controller
{

    /**
     * Lists all categories entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EcommerceBundle:categories')->findAll();

        return $this->render('EcommerceBundle:Administration:categories/layout/index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new categories entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new categories();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('adminCategories_show', array('id' => $entity->getId())));
        }

        return $this->render('EcommerceBundle:Administration:categories/layout/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a categories entity.
     *
     * @param categories $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(categories $entity)
    {
        $form = $this->createForm(new categoriesType(), $entity, array(
            'action' => $this->generateUrl('adminCategories_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new categories entity.
     *
     */
    public function newAction()
    {
        $entity = new categories();
        $form   = $this->createCreateForm($entity);

        return $this->render('EcommerceBundle:Administration:categories/layout/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a categories entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:categories')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find categories entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcommerceBundle:Administration:categories/layout/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing categories entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:categories')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find categories entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EcommerceBundle:Administration:categories/layout/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a categories entity.
    *
    * @param categories $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(categories $entity)
    {
        $form = $this->createForm(new categoriesType(), $entity, array(
            'action' => $this->generateUrl('adminCategories_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing categories entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EcommerceBundle:categories')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find categories entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('adminCategories_edit', array('id' => $id)));
        }

        return $this->render('EcommerceBundle:Administration:categories/layout/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a categories entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EcommerceBundle:categories')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find categories entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('adminCategories'));
    }

    /**
     * Creates a form to delete a categories entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adminCategories_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
