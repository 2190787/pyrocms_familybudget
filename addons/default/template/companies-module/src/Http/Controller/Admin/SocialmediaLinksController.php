<?php namespace Template\CompaniesModule\Http\Controller\Admin;

use Template\CompaniesModule\SocialmediaLink\Form\SocialmediaLinkFormBuilder;
use Template\CompaniesModule\SocialmediaLink\Table\SocialmediaLinkTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class SocialmediaLinksController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param SocialmediaLinkTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(SocialmediaLinkTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param SocialmediaLinkFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(SocialmediaLinkFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param SocialmediaLinkFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(SocialmediaLinkFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
