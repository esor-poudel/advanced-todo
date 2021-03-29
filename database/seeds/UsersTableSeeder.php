<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user= App\User::create([
            'name'=> 'esor',
            'email'=>'esor.poudel@gmail.com',
            'password'=>bcrypt('password'),
            'admin'=>1

        ]);

        App\Profile::create([
            'user_id'=>$user->id,
            'avatar'=>'uploads/avatar/1.jpg',
            'about'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad necessitatibus quisquam consequuntur natus praesentium veniam, nihil ex totam quos facilis ducimus sequi voluptatem nam esse inventore minima quod corrupti reprehenderit!',
            'facebook'=>'facebook.com',
            'youtube'=>'youtube.com'
        ]);
    }
}
