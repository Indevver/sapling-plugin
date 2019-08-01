<?php
namespace Sapling\Plugin\ACF;

use StoutLogic\AcfBuilder\FieldsBuilder;
use StoutLogic\AcfBuilder\FlexibleContentBuilder;
use StoutLogic\AcfBuilder\Builder;

class PageBuilder extends FieldsBuilder
{
    public function __construct()
    {
        parent::__construct('sapling_builder', ['label' => 'PAGE BUILDER']);
        $this->register();
    }

    protected function setupBuilder()
    {
        $section = $this->setLocation('post_type', '==', 'page')
            ->setGroupConfig('hide_on_screen', [
                'the_content',
                'comments'
            ])
            ->addRepeater('Section', ['layout' => 'block'])
            ->addTab('Content')
            ->addSelect('Heading Size', ['choices' => [
                'h1' => 'Heading 1',
                'h2' => 'Heading 2',
                'h3' => 'Heading 3',
                'h4' => 'Heading 4',
                'h5' => 'Heading 5',
                'h6' => 'Heading 6',
            ]])->setWidth('50')
            ->addText('Heading')->setWidth('50')
            ->addField('Columns', 'range', [
                'wrapper' => ['class' => 'column-types'],
                "default_value" => 10,
                "min" => 10,
                "max" => 90,
                "step" => 10,
                "id" => 'acf-field_section_columns',
            ]);
        $section->addBuilderFields($section->addFlexibleContent('Column 1', [
            'wrapper' => ['class' =>'admin-section-column-1 col'],
            'button_label' => 'Add Block',
        ]));
        $section->addBuilderFields($section->addFlexibleContent('Column 2', [
            'wrapper' => ['class' =>'admin-section-column-2 col'],
            'button_label' => 'Add Block',
        ]), '19');
        $section->addBuilderFields($section->addFlexibleContent('Column 3', [
            'wrapper' => ['class' =>'admin-section-column-3 col'],
            'button_label' => 'Add Block',
        ]), '49');
        $section->addBuilderFields($section->addFlexibleContent('Column 4', [
            'wrapper' => ['class' =>'admin-section-column-4 col'],
            'button_label' => 'Add Block',
        ]), '89');
        $section->endRepeater();

        $section = apply_filters('sapling_acf_builder', $section);
    }

    protected function addBuilderFields(FlexibleContentBuilder $builder, $condition = null): Builder
    {
        if($condition)
        {
            $builder->conditional('Columns', '>', $condition);
        }

        $fields = [];
        $fields = apply_filters('sapling_acf_builder_fields', $fields);

        foreach($fields as $field)
        {
            $builder->addLayout($field);
        }

        return $builder->endFlexibleContent();
    }

    protected function register()
    {
        add_action('acf/init', function() {
            $this->setupBuilder();
            acf_add_local_field_group($this->build());
        });
    }
}