<?php
// src/Acme/AccountBundle/Form/Type/UserType.php
namespace Acme\MusoreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;

class CustomerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', 'choice', array(
            'choices'   => array('Mr' => 'Mr', 'Ms' => 'Ms'),
            'required'  => false,
        ));

        $builder->add('surname', 'text');
        $builder->add('firstname', 'text');
        //$builder->add('address', 'collection', array('type' => new AddressType()));
        $builder->add('email', 'email');

        /*$builder->add('cardType', 'choice', array(
            'choices'   => array('1' => 'Visa', '2' => 'Mastercard'),
            'required'  => false,
        ));*/
       /* $builder->add('cardHolderName', 'text');
        $builder->add('cardNumber', 'text');
        $builder->add('CCV_code', 'text');
        $builder->add('expireDate', 'date');*/

        $builder->add('username', 'text');
        $builder->add('password', 'repeated', array(
        'first_name' => 'password',
        'second_name' => 'confirm',
        'type' => 'password'
        ));

        $builder->add('save', 'submit');
    }

    public function getDefaultOptions(array $options)
    {
        return array('data_class' => 'Acme\AccountBundle\Entity\Customer');
    }

    public function getName()
    {
        return 'customer';
    }
}