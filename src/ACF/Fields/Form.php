<?php
namespace Sapling\Plugin\ACF\Fields;

use Sapling\ACF\Tabs\Headings;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Form extends FieldsBuilder
{
    public function __construct()
    {
        $choices = [];
        $forms = \RGFormsModel::get_forms(null,'title');
        foreach ( $forms as $form ) {
            $choices[ (string) $form->id ] = $form->title;
        }

        parent::__construct('form', ['label' => 'Form']);
        $this->addTab('Content')
            ->addSelect('Form ID', [
                'choices' => $choices,
            ])
        ;
    }
}