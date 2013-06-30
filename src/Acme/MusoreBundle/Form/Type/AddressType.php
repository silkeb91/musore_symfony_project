<?php

namespace Acme\MusoreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('street', 'text');
        $builder->add('houseNumber', 'text');
        $builder->add('postalCode', 'text');
        $builder->add('town', 'text');

        $builder->add('save', 'submit');
    }

    public function getDefaultOptions(array $options)
    {
        return array('data_class' => 'Acme\AccountBundle\Entity\Address');
    }

    public function getName()
    {
        return 'address';
    }
}