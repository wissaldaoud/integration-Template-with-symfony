<?php

namespace App\Form;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Category;
use App\Entity\CategorySearch;
use App\Form\CategorySearchType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategorySearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('category',EntityType::class,['class' => Category::class,
        'choice_label' => 'titre' , 'label' => 'Catégorie' ]);
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CategorySearch::class,
        ]);
    }
}
