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
        
        App\Roles::create(
            [ 
                "name"=>'Administrateur',
                
            ]
            );

        App\Roles::create(
            [ 
                "name"=>'Editeur',
                
            ]
            );
    }
}
