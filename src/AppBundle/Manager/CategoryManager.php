<?php
namespace AppBundle\Manager;
use Mbx\ArchitectBundle\Abstracts\AbstractEntityManager;
use Mbx\ArchitectBundle\Interfaces\EntityInterface;
use AppBundle\Entity\Category;

/**
 * Generated by MbxArchitectBundle
 */
class CategoryManager extends AbstractEntityManager
{
    public function initRepositoryNS()
    {
        return Category::class;
    }

    public function beforeSave(EntityInterface $entity)
    {
        // TODO: Implement beforeSave() method.
    }

    public function afterSave(EntityInterface $entity)
    {
        // TODO: Implement afterSave() method.
    }

    public function beforeRemove(EntityInterface $entity)
    {
        // TODO: Implement beforeRemove() method.
    }

    public function afterRemove(EntityInterface $entity)
    {
        // TODO: Implement afterRemove() method.
    }
}