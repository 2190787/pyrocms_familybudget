<?php namespace Template\ServicesModule\Http\Controller\Admin;

use Template\ServicesModule\Service\Form\ServiceFormBuilder;
use Template\ServicesModule\Service\Table\ServiceTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class ServicesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param ServiceTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ServiceTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param ServiceFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(ServiceFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param ServiceFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(ServiceFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
