<?php 

echo "insertando un nuevo usuario";



DB::table('users')->insert(array(
            array(
                'id' => '4',
                'usuario' => 'prf',
                'password'  =>	bcrypt('xxx'),
                'tipo' => 'profesor'

 
            )
        ));

 ?>