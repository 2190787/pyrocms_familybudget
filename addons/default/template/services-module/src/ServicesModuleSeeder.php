<?php namespace Template\ServicesModule;

use Anomaly\PostsModule\Category\CategorySeeder;
use Anomaly\PostsModule\Post\PostSeeder;
use Anomaly\PostsModule\Type\TypeSeeder;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Template\CompaniesModule\Company\CompanySeeder;
use Template\CompaniesModule\SocialmediaLink\SocialmediaLinkModel;
use Template\CompaniesModule\SocialmediaLink\SocialmediaLinkSeeder;
use Template\ProductsModule\Brand\BrandModel;
use Template\ProductsModule\Brand\BrandSeeder;
use Template\ServicesModule\Service\ServiceSeeder;

/**
 * Class PostsModuleSeeder
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ServicesModuleSeeder extends Seeder
{

    /**
     * Run the seeder.
     */
    public function run()
    {
        $this->call(ServiceSeeder::class);
    }
}
