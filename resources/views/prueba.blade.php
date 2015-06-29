<?php
use App\profesor;
use App\user;


echo "insertando un nuevo usuario";



/*DB::table('users')->insert(array(
            array(
                'id' => '1',
                'usuario' => 'administrador',
                'password'  =>	bcrypt('1234567'),
                'tipo' => 'admin'

 
            )
        ));*/

//$profe=profesor::where('nombre','=','Juan')->update(['nombre'=>'Alex']);

echo "<br>";
$nombre='Alex';
$nuevo=user::create(['usuario' => $nombre]);
 ?>