<?php namespace Template\ProductsModule\Http\Controller\Admin;

use Template\ProductsModule\Characteristic\Form\CharacteristicFormBuilder;
use Template\ProductsModule\Characteristic\Table\CharacteristicTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class CharacteristicsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param CharacteristicTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(CharacteristicTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param CharacteristicFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(CharacteristicFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param CharacteristicFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(CharacteristicFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
