<?php
/**
 * Created by PhpStorm.
 * User: rpark
 * Date: 4/25/2019
 * Time: 4:36 PM
 */

namespace Sapling\Plugin\ACF\Tabs;


class Background
{
    private $background_colors = [];
    private $overlay_colors = [];

    public function __construct(array $background_colors, array $overlay_colors)
    {
        $this->background_colors = $background_colors;
        $this->overlay_colors = $overlay_colors;
    }

    public function addTab(&$builder)
    {
        $builder
            ->addTab('Background')
            ->addSelect("Background Type", [
                'choices' => [
                    '' => 'None',
                    'solid' => 'Solid',
                    'image' => 'Image',
                    'overlay' => 'Image with overlay',
                ]
            ])
            ->addSelect('Background Color', ['choices' => $this->background_colors])->conditional('Background Type', '==', 'solid')
            ->addSelect('Overlay Color', ['choices' => $this->overlay_colors])->conditional('Background Type', '==', 'overlay')
            ->addImage('Background Image')->conditional('Background Type', '!=', 'solid')
        ;
    }
}