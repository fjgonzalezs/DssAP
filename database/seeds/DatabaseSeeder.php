<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' => bcrypt('admin123'),
             ]);

         DB::table('notas')->insert([
            
            'segundoNota' => 10,
            'terceroNota' => 9.96,
            'cuartoNota' => 9.20,
            'quintoNota' => 9.88,
            'sextoNota' => 9.99,
            'septimoNota' => 9.72,
            'octavoNota' => 9.47,
            'novenoNota' => 9.88,
            'decimoNota' => 9.90,
            'primeroBNota' => 9.76,
            'segundoBNota' => 9.96,
            
             ]);

         DB::table('cursos')->insert([
            
            'nivelCurso' => 'tercer',
            'paraleloCurso' => 'A',
            'seccionCurso' => 'diurno',
             ]);

         DB::table('disciplina')->insert([
            
            'puntajeDisciplina' => 9,
           
             ]);

          DB::table('estudiantes')->insert([
            
            'nombreEstudiante' => 'Pedro',
            'apellidoEstudiante' => 'Jaramillo',
            'cedulaEstudiante' => '1722197660',
            'emailEstudiante' => 'pedro@predro.com',
            'telefonoEstudiante' => '27659405',
            'domicilioEstudiante' => 'av quito',
            'idNota' => 1,
            'idCurso' => 1,
            'idDisciplina' => 1,
            'idElegido' => null,

           
             ]);

           

DB::table('actitudes')->insert(array(
        	array('nombreActitud' => 'Participación de estudiantes en actividades científicas'),
        	array('nombreActitud' => 'Participación de estudiantes en actividades culturales'), 
        	array('nombreActitud' => 'Participación de estudiantes en actividades artísticas'), 
        	array('nombreActitud' => 'Participación de estudiantes en actividades deportivas'), 
        	array('nombreActitud' => 'Participación de estudiantes en actividades sociales'),  
            ));


	  DB::table('estudiantes_actitudes')->insert([ // solo la actitud cientifica por ahora
            
            'idEstudiante' => 1,
            'idActitud' => 1,
            
             ]);


DB::table('localidades')->insert(array(
        	array('nombreLocalidad' => 'País'),
        	array('nombreLocalidad' => 'Provincia'), 
        	array('nombreLocalidad' => 'Ciudad'), 
        	array('nombreLocalidad' => 'Establecimiento educativo'), 
        	array('nombreLocalidad' => 'No participa'),  
            ));

 DB::table('actitudes_localidades')->insert([ //solo a participado en pais
            
            'idActitud' => 1,
            'idLocalidad' => 1,
            
             ]);

    }
}
