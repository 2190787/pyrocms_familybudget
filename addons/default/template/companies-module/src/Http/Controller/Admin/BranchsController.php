<?php namespace Template\CompaniesModule\Http\Controller\Admin;

use Template\CompaniesModule\Branch\Form\BranchFormBuilder;
use Template\CompaniesModule\Branch\Table\BranchTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class BranchsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param BranchTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(BranchTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param BranchFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(BranchFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param BranchFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(BranchFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
