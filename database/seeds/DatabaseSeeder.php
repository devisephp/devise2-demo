<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('menu_items')->truncate();

    DB::table('dvs_languages')->truncate();
    DB::table('dvs_page_versions')->truncate();
    DB::table('dvs_pages')->truncate();
    DB::table('dvs_sites')->truncate();
    DB::table('dvs_site_element')->truncate();
    DB::table('dvs_templates')->truncate();
    DB::table('dvs_template_slice')->truncate();
    DB::table('dvs_slices')->truncate();
    DB::table('dvs_slice_instances')->truncate();
    DB::table('dvs_fields')->truncate();
    DB::table('group_user')->truncate();
    DB::table('groups')->truncate();
    DB::table('users')->truncate();

    $this->call([
      MenusSeeder::class,
      EventsSeeder::class,
      LanguagesSeeder::class,
      PagesSeeder::class,
      TemplatesSeeder::class,
      SitesSeeder::class,
      SlicesSeeder::class,
      FieldsSeeder::class,
      UserGroupSeeder::class
    ]);
  }
}
