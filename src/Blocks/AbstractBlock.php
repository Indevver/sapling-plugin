<?php
namespace Sapling\Plugin\Blocks;

use StoutLogic\AcfBuilder\FieldsBuilder;
use Timber\Timber;

abstract class AbstractBlock implements IGutenBlock
{
    abstract public function getName(): string;

    abstract public function getTitle(): string;

    abstract public function getDescription(): string;

    abstract public function getFields(): FieldsBuilder;

    public function getCategory(): string
    {
        return 'layout';
    }

    public function getIcon(): string
    {
        return 'welcome-write-blog';
    }

    public function getKeywords(): array
    {
        return [];
    }

    public function getRenderCallback(): callable
    {
        return [$this, 'render'];
    }

    public function filterContext(array $context): array
    {
        return $context;
    }

    public function render($block, $content = '', $is_preview = false)
    {

        $context = Timber::context();
        $context['block'] = $block;
        $context['content'] = $content;
        $context['is_preview'] = $is_preview;
        $context['fields'] = get_fields();
        $context = $this->filterContext($context);

        $slug = str_replace('acf/', '', $block['name']);

        Timber::render('blocks/'.$slug.'.twig', $context);
    }
}