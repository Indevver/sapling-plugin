<?php
/**
 * Created by PhpStorm.
 * User: rpark
 * Date: 4/25/2019
 * Time: 4:36 PM
 */

namespace Sapling\Plugin\ACF\Tabs;


class Text
{
    private $colors = [];

    public function __construct(array $colors)
    {
        $this->colors = $colors;
    }

    public function addTab(&$builder)
    {
        $builder
            ->addTab('Font')
            ->addField('Text Alignment', 'button_group', [
                'choices' => [
                    ""                  => "Default",
                    "has-text-left"     => "<span class=\"dashicons dashicons-editor-alignleft\"></span>",
                    "has-text-centered" => "<span class=\"dashicons dashicons-editor-aligncenter\"></span>",
                    "has-text-right"    => "<span class=\"dashicons dashicons-editor-alignright\"></span>",
                ]
            ])->setWidth('50')
            ->addSelect('Text Color', [
                'choices' => $this->colors,
            ])->setWidth('50')
        ;
    }
}
