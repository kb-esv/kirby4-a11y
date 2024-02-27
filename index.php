<?php
/*
 * kirby 4 - kirbytags for accessibility
 * WCAG 2.2 SC 3.1.2 - Language of Parts
 * WCAG 2.2 SC 3.1.4 - Abbreviations
 *
 * @version    0.1.0
 * @author     Frank Berker <fb@kb-esv.de>, Frank Reins <fr@kb-esv.de>, Birgit Scheer <bs@kb-esv.de>, 
 * @copyright  Kompetenzzentrum Barrierefreiheit Volmarstein
 * @link       https://github.com/kb-esv/kirby4-a11y
 * @license    MIT
 */

Kirby::plugin('kbv/a11y', [
    'tags' => [
        'lang' => [
            'attr' => [
                'text',
                'class'
            ],
            'html' => function ($tag) {
                $lang = $tag->value ?? 'en';
                $text = $tag->text ?? '';
                $class = $tag->class ? " class=\"".$tag->class."\"" : '';
                return "<span lang=\"" . $lang . "\"" . $class . ">" . $text . "</span>";
            }
        ],
        'en' => [
            'attr' => [
                'class'
            ],
            'html' => function ($tag) {
                $text = $tag->value ?? '';
                $class = $tag->class ? " class=\"".$tag->class."\"" : '';
                return "<span lang=\"en\"" . $class . ">" . $text . "</span>";
            }
        ],
        'de' => [
            'attr' => [
                'class'
            ],
            'html' => function ($tag) {
                $text = $tag->value ?? '';
                $class = $tag->class ? " class=\"".$tag->class."\"" : '';
                return "<span lang=\"de\"" . $class . ">" . $text . "</span>";
            }
        ],
        'abbr' => [
            'attr' => [
                'text',
                'class',
                'lang'
            ],
            'html' => function ($tag) {
                $abbr = $tag->value ?? '';
                $text = $tag->text ?? '';                
                $lang = $tag->attr('lang','');
                $lang = $lang ? " lang=\"" . $lang . "\"" : '';
                $class = $tag->class ? " class=\"".$tag->class."\"" : '';
                return "<abbr title=\"" . $text . "\"" . $lang . $class . ">" . $abbr . "</abbr>";
            }
        ],
        'abk' => [
            'attr' => [
                'text',
                'class',
            ],
            'html' => function ($tag) {
                $abbr = $tag->value ?? '';
                $text = $tag->text ?? '';
                $class = $tag->class ? " class=\"".$tag->class."\"" : '';
                return "<abbr title=\"" . $text . "\"" . $class . ">" . $abbr . "</abbr>";
            }
        ]
    ]
]);