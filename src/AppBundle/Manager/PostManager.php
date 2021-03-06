<?php
namespace AppBundle\Manager;
use Mbx\ArchitectBundle\Abstracts\AbstractEntityManager;
use Mbx\ArchitectBundle\Interfaces\EntityInterface;
use AppBundle\Entity\Post;

/**
 * Generated by MbxArchitectBundle
 */
class PostManager extends AbstractEntityManager
{
    /**
     * Returns the repository namespace
     *
     * @return string
     */
    public function initRepositoryNS()
    {
        return Post::class;
    }

    /**
     * Code to execute before saving the managed entity
     *
     * @param \Mbx\ArchitectBundle\Interfaces\EntityInterface $entity
     * @return array
     */
    public function beforeSave(EntityInterface $entity)
    {
        // TODO: Implement beforeSave() method.
        return array();
    }

    /**
     * Code to execute after saving the managed entity
     *
     * @param \Mbx\ArchitectBundle\Interfaces\EntityInterface $entity
     * @param array $extraVars
     * @return mixed|void
     */
    public function afterSave(EntityInterface $entity, $extraVars = array())
    {
        // TODO: Implement afterSave() method.
        //extract($extraVars);
    }

    /**
     * Code to execute before removing the managed entity
     *
     * @param \Mbx\ArchitectBundle\Interfaces\EntityInterface $entity
     * @return array
     */
    public function beforeRemove(EntityInterface $entity)
    {
        // TODO: Implement beforeRemove() method.
        return array();
    }

    /**
     * Code to execute after removing the managed entity
     *
     * @param \Mbx\ArchitectBundle\Interfaces\EntityInterface $entity
     * @param array $extraVars
     * @return mixed|void
     */
    public function afterRemove(EntityInterface $entity, $extraVars = array())
    {
        // TODO: Implement afterRemove() method.
        //extract($extraVars);
    }
}