<?php
/**
 * Created by PhpStorm.
 * User: rpark
 * Date: 4/25/2019
 * Time: 4:36 PM
 */

namespace Sapling\Plugin\ACF\Tabs;


class Heading
{

    public function addTab(&$builder)
    {
        $builder->addTab('Heading')
            ->addText('Heading')->setWidth('50')
	        ->addSelect('Heading Size', ['choices' => [
		        'h1' => 'Heading 1',
		        'h2' => 'Heading 2',
		        'h3' => 'Heading 3',
		        'h4' => 'Heading 4',
	        ]])->setWidth('20')
	        ->addField('Text Alignment', 'button_group', [
		        'choices' => [
			        "has-text-left" => "<span class=\"dashicons dashicons-editor-alignleft\"></span>",
			        "has-text-centered" => "<span class=\"dashicons dashicons-editor-aligncenter\"></span>",
			        "has-text-right" => "<span class=\"dashicons dashicons-editor-alignright\"></span>",
		        ]
	        ])->setWidth('30')
        ;
    }
}
