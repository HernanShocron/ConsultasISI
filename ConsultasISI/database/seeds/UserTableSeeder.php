<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_alumno = Role::where('name','Alumno')->first();
        $role_docente = Role::where('name','Docente')->first();
        $role_admin = Role::where('name','Administrador')->first();

        $user = new User();
        $user->name = "Alumno";
        $user->email = "alumno@email.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_alumno);

        $user = new User();
        $user->name = "Docente";
        $user->email = "docente@email.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_docente);

        $user = new User();
        $user->name = "Administrador";
        $user->email = "administrador@email.com";
        $user->password = bcrypt('query');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
