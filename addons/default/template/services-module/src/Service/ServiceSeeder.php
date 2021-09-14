<?php namespace Template\ServicesModule\Service;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Template\ServicesModule\Service\Contract\ServiceRepositoryInterface;
use Template\ServicesModule\ServicesModule;
use Template\ServicesModule\ServicesModuleServiceProvider;

class ServiceSeeder extends Seeder
{

    protected $services;

    public function __construct(ServiceRepositoryInterface $services)
    {
        $this->services = $services;
    }

    /**
     * Run the seeder.
     */
    public function run()
    {
        $this->services->factory()->create()->count(5);
    }
}
