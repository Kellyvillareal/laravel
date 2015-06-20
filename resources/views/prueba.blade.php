<?php 

echo "insertando un nuevo usuario";



DB::table('users')->insert(array(
            array(
                'id' => '4',
                'usuario' => 'administrador',
                'password'  =>	bcrypt('1234567'),
                'tipo' => 'admin'

 
            )
        ));

 ?>