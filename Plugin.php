<?php namespace Wiz\Testimonials;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'wiz.faqs::lang.plugin.name',
            'description' => 'wiz.faqs::lang.plugin.description',
            'author'      => 'Wiz Comunicaciones',
            'icon'        => 'icon-check-square',
            'iconSvg'     => '/plugins/wiz/testimonials/assets/images/plugin-icon.svg',
            'homepage'    => 'https://wiz.cl'
        ];
    }

    public function registerPermissions()
    {
        return [
            'wiz.testimonials::manage_testimonials' => [
                'tab'   => 'wiz.testimonials::lang.plugin.name',
                'label' => 'Gestionar Testimonios',
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'wiz-testimonials' => [
                'label'       => 'Testimonios',
                'url'         => Backend::url('wiz/testimonials/testimonials'),
                'icon'        => 'icon-check-square',
                'iconSvg'     => '/plugins/wiz/testimonials/assets/images/plugin-icon.svg',
                'permissions' => ['wiz.testimonials::manage_testimonials'],
                'order'       => 500,
            ],
        ];
    }

    public function registerListColumnTypes()
    {
        return [
            'wiz_testimonials_html' => [
                'Wiz\Testimonials\Classes\ListColumnTypes',
                'htmlColumnType'
            ],
        ];
    }
}


/**
 *
 *
 * plugin:
permissions:
:
tab: 'wiz.testimonials::lang.plugin.name'
label: 'Gestionar Testimonios'
navigation:
wiz-testimonials:
label: Testimonios
url: wiz/testimonials/testimonials
icon: icon-check-square
permissions:
- 'wiz.testimonials::manage_testimonials'
order: '500'

 */