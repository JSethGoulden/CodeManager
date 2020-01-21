<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ChallengesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('challenges')->insert([
            'title' => 'First code challenge',
            'description' => 'Create an alert box with the text "Hello world!"',
            'code' => 'alert("Hello world!");',
            'comments' => 'That was easy',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('challenges')->insert([
            'title' => 'Second code challenge',
            'description' => 'Log something to the console',
            'code' => 'alert("boop");',
            'comments' => 'oops',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('challenges')->insert([
            'title' => 'First code challenge',
            'description' => Str::random(40),
            'code' => 'console.log("Hello world!");',
            'comments' => Str::random(20),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('challenges')->insert([
            'title' => 'First code challenge',
            'description' => Str::random(40),
            'code' => 'console.log("Hello world!");',
            'comments' => Str::random(20),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('challenges')->insert([
            'title' => 'First code challenge',
            'description' => Str::random(40),
            'code' => 'console.log("Hello world!");',
            'comments' => Str::random(20),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('challenges')->insert([
            'title' => 'First code challenge',
            'description' => Str::random(40),
            'code' => 'console.log("Hello world!");',
            'comments' => Str::random(20),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}



/*
    $table->bigIncrements('id');
            $table->string('title');
            $table->text('description');
            $table->text('code');
            $table->boolean('success')->default(0);
            $table->text('comments');
            $table->timestamps();
*/