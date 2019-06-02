<?php

namespace App\Form;

use App\Entity\AdmissionForm;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdmissionFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('currentLevel')
            ->add('desiredLevel')
            ->add('firstSemesterMark')
            ->add('secondSemesterMark')
            ->add('rank')
            ->add('totalStudents');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AdmissionForm::class,
        ]);
    }
}
