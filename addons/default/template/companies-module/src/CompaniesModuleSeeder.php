<?php namespace Template\CompaniesModule;

use Anomaly\PostsModule\Category\CategorySeeder;
use Anomaly\PostsModule\Post\PostSeeder;
use Anomaly\PostsModule\Type\TypeSeeder;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Template\CompaniesModule\Company\CompanySeeder;
use Template\CompaniesModule\SocialmediaLink\SocialmediaLinkModel;
use Template\CompaniesModule\SocialmediaLink\SocialmediaLinkSeeder;
use Template\ProductsModule\Brand\BrandModel;
use Template\ProductsModule\Brand\BrandSeeder;

/**
 * Class PostsModuleSeeder
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class CompaniesModuleSeeder extends Seeder
{

    /**
     * Run the seeder.
     */
    public function run()
    {
        $this->call(BrandSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(SocialmediaLinkSeeder::class);
    }
}
