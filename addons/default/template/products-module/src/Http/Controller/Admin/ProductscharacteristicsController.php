<?php namespace Template\ProductsModule\Http\Controller\Admin;

use Template\ProductsModule\Productscharacteristic\Form\ProductscharacteristicFormBuilder;
use Template\ProductsModule\Productscharacteristic\Table\ProductscharacteristicTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class ProductscharacteristicsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param ProductscharacteristicTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ProductscharacteristicTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param ProductscharacteristicFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(ProductscharacteristicFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param ProductscharacteristicFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(ProductscharacteristicFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
