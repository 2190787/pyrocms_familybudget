<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class TemplateModuleServicesChangeFieldsType extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // $this->fields()->create([]);
        // $this->streams()->create([]);
        // $this->assignments()->create([]);

        
        // change the slug and type of the existing "producer_id" field in the "data" namespace
        $this->fields()->findBySlugAndNamespace('description', 'services')
            ->setAttribute('type', 'anomaly.field_type.wysiwyg')
            ->setAttribute('config', [
                'default_value' => null,
                'configuration' => 'default',
                'line_breaks'   => false,
                'sync'        => true,
                'height'        => 150,
            ])
            ->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->fields()->findBySlugAndNamespace('description', 'services')
            ->setAttribute('type', 'anomaly.field_type.textarea');
    }
}
