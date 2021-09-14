<?php namespace Template\NewsModule\Http\Controller\Admin;

use Template\NewsModule\News\Form\NewsFormBuilder;
use Template\NewsModule\News\Table\NewsTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class NewsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param NewsTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(NewsTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param NewsFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(NewsFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param NewsFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(NewsFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
