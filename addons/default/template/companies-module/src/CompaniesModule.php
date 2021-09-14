<?php namespace Template\CompaniesModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class CompaniesModule extends Module
{

    /**
     * The navigation display flag.
     *
     * @var bool
     */
    protected $navigation = true;

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-puzzle-piece';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'companies' => [
            'buttons' => [
                'new_company',
            ],
        ],
        'branchs' => [
            'buttons' => [
                'new_branch',
            ],
        ],
        'socialmedia_links' => [
            'buttons' => [
                'new_socialmedia_link',
            ],
        ],
    ];

}
