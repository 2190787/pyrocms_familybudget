<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class TemplateModuleCompaniesChangeDescriptionFieldsType extends Migration
{
    public function up()
    {

        $this->fields()->findBySlugAndNamespace('privacy_policy', 'companies')
            ->setAttribute('type', 'anomaly.field_type.wysiwyg')
            ->setAttribute('config', [
                'default_value' => null,
                'configuration' => 'default',
                'line_breaks'   => false,
                'sync'        => true,
                'height'        => 150,
            ])
            ->save();

        $this->fields()->findBySlugAndNamespace('quality_policy', 'companies')
            ->setAttribute('type', 'anomaly.field_type.wysiwyg')
            ->setAttribute('config', [
                'default_value' => null,
                'configuration' => 'default',
                'line_breaks'   => false,
                'sync'        => true,
                'height'        => 150,
            ])
            ->save();

        $this->fields()->findBySlugAndNamespace('institutional_message', 'companies')
            ->setAttribute('type', 'anomaly.field_type.wysiwyg')
            ->setAttribute('config', [
                'default_value' => null,
                'configuration' => 'default',
                'line_breaks'   => false,
                'sync'        => true,
                'height'        => 150,
            ])
            ->save();

        $this->fields()->findBySlugAndNamespace('about', 'companies')
            ->setAttribute('type', 'anomaly.field_type.wysiwyg')
            ->setAttribute('config', [
                'default_value' => null,
                'configuration' => 'default',
                'line_breaks'   => false,
                'sync'        => true,
                'height'        => 150,
            ])
            ->save();

        $this->fields()->findBySlugAndNamespace('vision', 'companies')
            ->setAttribute('type', 'anomaly.field_type.wysiwyg')
            ->setAttribute('config', [
                'default_value' => null,
                'configuration' => 'default',
                'line_breaks'   => false,
                'sync'        => true,
                'height'        => 150,
            ])
            ->save();

        $this->fields()->findBySlugAndNamespace('mission', 'companies')
            ->setAttribute('type', 'anomaly.field_type.wysiwyg')
            ->setAttribute('config', [
                'default_value' => null,
                'configuration' => 'default',
                'line_breaks'   => false,
                'sync'        => true,
                'height'        => 150,
            ])
            ->save();

        $this->fields()->findBySlugAndNamespace('values', 'companies')
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

    public function down()
    {
        $this->fields()->findBySlugAndNamespace('privacy_policy', 'companies')
            ->setAttribute('type', 'anomaly.field_type.textarea');

        $this->fields()->findBySlugAndNamespace('quality_policy', 'companies')
            ->setAttribute('type', 'anomaly.field_type.textarea');

        $this->fields()->findBySlugAndNamespace('institutional_message', 'companies')
            ->setAttribute('type', 'anomaly.field_type.textarea');

        $this->fields()->findBySlugAndNamespace('about', 'companies')
            ->setAttribute('type', 'anomaly.field_type.textarea');

        $this->fields()->findBySlugAndNamespace('vision', 'companies')
            ->setAttribute('type', 'anomaly.field_type.textarea');

        $this->fields()->findBySlugAndNamespace('mission', 'companies')
            ->setAttribute('type', 'anomaly.field_type.textarea');
        $this->fields()->findBySlugAndNamespace('values', 'companies')
            ->setAttribute('type', 'anomaly.field_type.textarea');
    }
}
