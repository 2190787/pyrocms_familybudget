<?php namespace Template\ProductsModule\Http\Controller\Admin;

use Template\ProductsModule\Brand\Form\BrandFormBuilder;
use Template\ProductsModule\Brand\Table\BrandTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class BrandsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param BrandTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(BrandTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param BrandFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(BrandFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param BrandFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(BrandFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
