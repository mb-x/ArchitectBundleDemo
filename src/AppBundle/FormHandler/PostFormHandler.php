<?php
namespace AppBundle\FormHandler;
use Mbx\ArchitectBundle\Abstracts\AbstractFormHandler;
use Mbx\ArchitectBundle\Interfaces\EntityInterface;
use AppBundle\Form\PostType;

/**
 * Generated by MbxArchitectBundle
 */
class PostFormHandler extends AbstractFormHandler
{

    /**
     * Returns the route name of delete action
     *
     * @return string
     */
    public function initDeleteRouteName()
    {
       return 'post_delete';
    }
    /**
     * Returns the FormType's namespace of the managed entity
     *
     * @return string
     */
    public function initFormTypeNS()
    {
        return PostType::class;
    }
    /**
     * Code to execute before checking if form is submitted and valid
     *
     * @param \Mbx\ArchitectBundle\Interfaces\EntityInterface $entity
     * @return array
     */
    public function beforeCheckForm(EntityInterface $entity)
    {
        // TODO: Implement beforeCheckForm() method.
        return array();
    }
    /**
     * Code to execute after checking if form is submitted and valid
     *
     * @param \Mbx\ArchitectBundle\Interfaces\EntityInterface $entity
     * @param array $extraVars
     * @return mixed
     */
    public function afterCheckForm(EntityInterface $entity, $extraVars = array())
    {
        // TODO: Implement afterCheckForm() method.
        // extract($extraVars);
    }
    /**
     * Code to execute before checking if delete form is submitted and valid
     *
     * @param \Mbx\ArchitectBundle\Interfaces\EntityInterface $entity
     * @return mixed
     */
    public function beforeCheckDeleteForm(EntityInterface $entity)
    {
        // TODO: Implement beforeCheckDeleteForm() method.
        return array();
    }
    /**
     * Code to execute after checking if delete form is submitted and valid
     *
     * @param \Mbx\ArchitectBundle\Interfaces\EntityInterface $entity
     * @param array $extraVars
     * @return mixed
     */
    public function afterCheckDeleteForm(EntityInterface $entity, $extraVars = array())
    {
        // TODO: Implement afterCheckDeleteForm() method.
        // extract($extraVars);
    }
}