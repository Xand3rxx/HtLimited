<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertSQLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_menus = file_get_contents(database_path() . '/insert_sql/admin_menus.sql');
        $admin_menu_items = file_get_contents(database_path() . '/insert_sql/admin_menu_items.sql');
        $posts = file_get_contents(database_path() . '/insert_sql/posts.sql');
        $post_tag = file_get_contents(database_path() . '/insert_sql/post_tag.sql');
        $lb_contents = file_get_contents(database_path() . '/insert_sql/lb_contents.sql');

        DB::statement($admin_menus);
        DB::statement($admin_menu_items);
        DB::statement($posts);
        DB::statement($post_tag);
        DB::statement($lb_contents);

    }
}


