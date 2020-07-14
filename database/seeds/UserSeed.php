<?php
use App\User;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(User::class)->times(48)->create();
        
        $user=new User();
       
        $user->role_id=1;
        $user->name='a';
        $user->email='noslide88u@gmail.com';
        $user->password='123456789';
        $user->save();

        $user=new User();
        $user->role_id=1;
        $user->name='b';
        $user->email='abc@gmail.com';
        $user->password='12345678';

        $user->save();

        $user=new User();
        $user->role_id=2;
        $user->name='c';
        $user->email='abcd@gmail.com';
        $user->password='12345678';

        $user->save();

        $user=new User();
        $user->role_id=2;
        $user->name='d';
        $user->email='abcde@gmail.com';
        $user->password='12345678';


        $user->save();

    }
}
