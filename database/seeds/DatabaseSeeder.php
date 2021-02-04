<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $data = [
        //     'name' => 'yuri5',
        // 	'email' => 'yuri29@gmail.com',
        // 	'password' => bcrypt('12345678'),
        // ];
        // DB::table('users')->insert($data);

        $comment = [
            'name' => 'kate',
            'slug' => 'Admin',
            'description' => 'the district puts on a new outfit with pink peach blossoming Peach blossoms have five pink petals with long red pistils,',
            'detail_id'=>'1',
        ];
        DB::table('comments')->insert($comment);
    }
}
