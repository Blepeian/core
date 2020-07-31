<?php

declare(strict_types=1);

namespace Bolt\Repository;

use Bolt\Doctrine\JsonHelper;
use Bolt\Entity\Field;
use Bolt\Entity\FieldParentInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;
use Tightenco\Collect\Support\Collection;

/**
 * @method Field|null find($id, $lockMode = null, $lockVersion = null)
 * @method Field|null findOneBy(array $criteria, array $orderBy = null)
 * @method Field[] findAll()
 * @method Field[] findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FieldRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Field::class);
    }

    private function getQueryBuilder(?QueryBuilder $qb = null)
    {
        return $qb ?: $this->createQueryBuilder('field');
    }

    public function findOneBySlug(string $slug): ?Field
    {
        $qb = $this->getQueryBuilder();
        $connection = $qb->getEntityManager()->getConnection();

        [$where, $slug] = JsonHelper::wrapJsonFunction('translations.value', $slug, $connection);

        return $qb
            ->innerJoin('field.translations', 'translations')
            ->addSelect('translations')
            ->andWhere($where . ' = :slug')
            ->setParameter('slug', $slug)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findAllByParent(Field $field): ?array
    {
        if (! $field instanceof FieldParentInterface || ! $field->getId()) {
            return [];
        }

        $qb = $this->getQueryBuilder();

        return $qb
            ->andWhere('field.parent = :parentId')
            ->setParameter('parentId', $field->getId())
            ->orderBy('field.sortorder', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public static function factory(Collection $definition, string $name = '', string $label = ''): Field
    {
        $type = $definition['type'];

        $classname = self::getFieldClassname($type);
        if (class_exists($classname)) {
            $field = new $classname();
        } else {
            $field = new Field();
        }

        if ($name !== '') {
            $field->setName($name);
        }

        $nameOrType = empty($name) ? $type : $name;
        $field->setDefinition($nameOrType, $definition);

        if ($label !== '') {
            $field->setLabel($label);
        }

        if ($definition->has('default_locale')) {
            $field->setDefaultLocale($definition->get('default_locale'));
            $field->setLocale($definition->get('default_locale'));
        }

        return $field;
    }

    public function findParents(Field $field)
    {
        $qb = $this->getQueryBuilder();

        return $qb
            ->andWhere('field.parent = :parentId')
            ->setParameter('parentId', $field->getId())
            ->orderBy('field.sortorder', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public static function getFieldClassname(string $type): ?string
    {
        // The classname we want
        $classname = ucwords($type) . 'Field';

        // Classnames of all fields (classes that implement Bolt\Entity\FieldInterface)
        $allFields = collect(get_declared_classes())
            ->filter(function ($class) {
                return in_array('Bolt\\Entity\\FieldInterface', class_implements($class), true);
            });

        // Classnames that end with $classname
        $match = $allFields->filter(function ($class) use ($classname) {
            return substr_compare($class, $classname, mb_strlen($class) - mb_strlen($classname), mb_strlen($classname)) === 0;
        });

        return $match->isNotEmpty() ? $match->first() : null;
    }
}
