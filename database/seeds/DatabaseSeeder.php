<?php

use Illuminate\Database\Seeder;
use App\Company;
use App\User;
use App\Job;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name'=>'company']);
        Role::create(['name'=>'student']);
        Permission::create(['name'=>'post a job']);
        Permission::create(['name'=>'apply for a job']);
        // $this->call(UsersTableSeeder::class);
        factory(User::class, 10)->create()->each(function ($user) {
            $user->company()->save(factory(Company::class)->make());
                $user->assignRole('company');
                $user->givePermissionTo('post a job');

        });

        factory(User::class, 10)->create()->each(function($user){
                $user->assignRole('student');
                $user->givePermissionTo('apply for a job');

        });

        $companies=Company::all();
        foreach($companies as $company)
        {

                factory(Job::class, rand(2,5))->create([

                    'company_id' => $company->id]);

        }
    }
}
