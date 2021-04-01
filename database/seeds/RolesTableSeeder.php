<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert([
            'id' => 1,
            'name' => 'SPEAKER',
            'description' => 'This is the speaker role',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('user_roles')->insert([
            'id' => 2,
            'name' => 'ATTENDEE',
            'description' => 'This is the attendee role',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('user_roles')->insert([
            'id' => 3,
            'name' => 'Member',
            'description' => 'This is the member role',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
