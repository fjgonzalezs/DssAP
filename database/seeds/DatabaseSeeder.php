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

        DB::table('umbral')->insert([
            
            'valorUmbral' => 70,
            
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
            
            'nivelCurso' => 'tercero',
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
        	array('nombreActitud' => 'Participación de estudiantes en actividades científicas', 'totalActitud' => 25),
        	array('nombreActitud' => 'Participación de estudiantes en actividades culturales', 'totalActitud' => 15), 
        	array('nombreActitud' => 'Participación de estudiantes en actividades artísticas', 'totalActitud' => 15), 
        	array('nombreActitud' => 'Participación de estudiantes en actividades deportivas', 'totalActitud' => 20), 
        	array('nombreActitud' => 'Participación de estudiantes en actividades sociales', 'totalActitud' => 15),  
          array('nombreActitud' => 'Disciplina', 'totalActitud' => 10),  
            ));

   /* DB::table('totales_pesos')->insert(array(
          array('valorTotal' => 25),
          array('valorTotal' => 15), 
          array('valorTotal' => 15), 
          array('valorTotal' => 20), 
          array('valorTotal' => 15),  
            ));

     DB::table('pesos_actitudes')->insert(array(
          array('puntajePeso' => 10, 'idTotal_peso' => 1 ),
          array('puntajePeso' => 7, 'idTotal_peso' => 1), 
          array('puntajePeso' => 5, 'idTotal_peso' => 1), 
          array('puntajePeso' => 3, 'idTotal_peso' => 1),
          array('puntajePeso' => 0, 'idTotal_peso' => 1), 
            
            ));*/


DB::table('localidades')->insert(array(

          /* id 1 - actividades cientificas*/
          array('nombreLocalidad' => 'País', 'pesoLocalidad' => 10, 'idActitud' => 1),
          array('nombreLocalidad' => 'Provincia', 'pesoLocalidad' => 7, 'idActitud' => 1), 
          array('nombreLocalidad' => 'Ciudad', 'pesoLocalidad' => 5, 'idActitud' => 1), 
          array('nombreLocalidad' => 'Establecimiento educativo','pesoLocalidad' => 3, 'idActitud' => 1), 
          array('nombreLocalidad' => 'No participa', 'pesoLocalidad' => 0, 'idActitud' => 1),  

          /* id 2 - actividades culturales*/
          array('nombreLocalidad' => 'País', 'pesoLocalidad' => 6, 'idActitud' => 2),
          array('nombreLocalidad' => 'Provincia', 'pesoLocalidad' => 4, 'idActitud' => 2), 
          array('nombreLocalidad' => 'Ciudad', 'pesoLocalidad' => 3, 'idActitud' => 2), 
          array('nombreLocalidad' => 'Establecimiento educativo','pesoLocalidad' => 2, 'idActitud' => 2), 
          array('nombreLocalidad' => 'No participa', 'pesoLocalidad' => 0, 'idActitud' => 2),  

           /* id 3 - actividades artisticas*/
          array('nombreLocalidad' => 'País', 'pesoLocalidad' => 6, 'idActitud' => 3),
          array('nombreLocalidad' => 'Provincia', 'pesoLocalidad' => 4, 'idActitud' => 3), 
          array('nombreLocalidad' => 'Ciudad', 'pesoLocalidad' => 3, 'idActitud' => 3), 
          array('nombreLocalidad' => 'Establecimiento educativo','pesoLocalidad' => 2, 'idActitud' => 3), 
          array('nombreLocalidad' => 'No participa', 'pesoLocalidad' => 0, 'idActitud' => 3),  

           /* id 4 - actividades deportivas*/
          array('nombreLocalidad' => 'País', 'pesoLocalidad' => 8, 'idActitud' => 4),
          array('nombreLocalidad' => 'Provincia', 'pesoLocalidad' => 6, 'idActitud' => 4), 
          array('nombreLocalidad' => 'Ciudad', 'pesoLocalidad' => 4, 'idActitud' => 4), 
          array('nombreLocalidad' => 'Establecimiento educativo','pesoLocalidad' => 2, 'idActitud' => 4), 
          array('nombreLocalidad' => 'No participa', 'pesoLocalidad' => 0, 'idActitud' => 4),  

           /* id 5 - actividades sociales*/
          array('nombreLocalidad' => 'País', 'pesoLocalidad' => 6, 'idActitud' => 5),
          array('nombreLocalidad' => 'Provincia', 'pesoLocalidad' => 4, 'idActitud' => 5), 
          array('nombreLocalidad' => 'Ciudad', 'pesoLocalidad' => 3, 'idActitud' => 5), 
          array('nombreLocalidad' => 'Establecimiento educativo','pesoLocalidad' => 2, 'idActitud' => 5), 
          array('nombreLocalidad' => 'No participa', 'pesoLocalidad' => 0, 'idActitud' => 5),  

             /* id 6 - Disciplina*/
          array('nombreLocalidad' => '9 a 10', 'pesoLocalidad' => 10, 'idActitud' => 6),
          array('nombreLocalidad' => '7 a 8', 'pesoLocalidad' => 7.5, 'idActitud' => 6), 
          array('nombreLocalidad' => '4 a 6', 'pesoLocalidad' => 5, 'idActitud' => 6), 
          array('nombreLocalidad' => '1 a 3','pesoLocalidad' => 2.5, 'idActitud' => 6), 
          

            ));


	  DB::table('estudiantes_actitudes')->insert([ // solo la actitud cientifica por ahora
            
            ['idEstudiante' => 1,'idLocalidad' =>1],
            ['idEstudiante' => 1,'idLocalidad' =>2],
            ['idEstudiante' => 1,'idLocalidad' =>3],
            ['idEstudiante' => 1,'idLocalidad' =>4], //todos cientifico hasta el 5
            
            ['idEstudiante' => 1,'idLocalidad' =>8],
            ['idEstudiante' => 1,'idLocalidad' =>9],
            

            
             ]

             );




/* DB::table('actitudes_localidades')->insert([ //solo a participado en pais
            
            'idActitud' => 1,
            'idLocalidad' => 1,
            
             ]);*/


 /* segundo estudiante*/

         DB::table('notas')->insert([
            
            'segundoNota' => 9.78,
            'terceroNota' => 9.86,
            'cuartoNota' => 9.20,
            'quintoNota' => 9.18,
            'sextoNota' => 8.99,
            'septimoNota' => 9.72,
            'octavoNota' => 9.47,
            'novenoNota' => 9.88,
            'decimoNota' => 7.90,
            'primeroBNota' => 8.76,
            'segundoBNota' => 6.96,
            
             ]);

          DB::table('disciplina')->insert([
            
            'puntajeDisciplina' => 9,
           
             ]);

          DB::table('estudiantes')->insert([
            
            'nombreEstudiante' => 'Pablo',
            'apellidoEstudiante' => 'Jara',
            'cedulaEstudiante' => '1722157660',
            'emailEstudiante' => 'pblo@pablocom',
            'telefonoEstudiante' => '27659405',
            'domicilioEstudiante' => 'av loja',
            'idNota' => 2,
            'idCurso' => 1,
            'idDisciplina' => 2,
            'idElegido' => null,

           
             ]);

           

	  DB::table('estudiantes_actitudes')->insert([ // solo la actitud cientifica por ahora
            
            
            ['idEstudiante' => 2,'idLocalidad' =>2],
            ['idEstudiante' => 2,'idLocalidad' =>3],
            ['idEstudiante' => 2,'idLocalidad' =>4],
            
             ]);

 //tercero
	  /* tercero estudiante*/

         DB::table('notas')->insert([
            
            'segundoNota' => 9.58,
            'terceroNota' => 9.86,
            'cuartoNota' => 9.20,
            'quintoNota' => 7.18,
            'sextoNota' => 7.79,
            'septimoNota' => 9.72,
            'octavoNota' => 9.47,
            'novenoNota' => 8.88,
            'decimoNota' => 7.90,
            'primeroBNota' => 9.76,
            'segundoBNota' => 6.96,
            
             ]);

          DB::table('disciplina')->insert([
            
            'puntajeDisciplina' => 8,
           
             ]);

          DB::table('estudiantes')->insert([
            
            'nombreEstudiante' => 'Maria',
            'apellidoEstudiante' => 'Angulo',
            'cedulaEstudiante' => '1722567660',
            'emailEstudiante' => 'maria@angulocom',
            'telefonoEstudiante' => '27659434',
            'domicilioEstudiante' => 'av Chone',
            'idNota' => 3,
            'idCurso' => 1,
            'idDisciplina' => 3,
            'idElegido' => null,

           
             ]);

           

	  DB::table('estudiantes_actitudes')->insert([ // solo la actitud cientifica por ahora
            
            'idEstudiante' => 3,
           // 'idActitud' => 1,
            'idLocalidad' =>3,
            
             ]);
//cuarto

         DB::table('notas')->insert([
            
            'segundoNota' => 8.78,
            'terceroNota' => 8.86,
            'cuartoNota' => 8.20,
            'quintoNota' => 8.18,
            'sextoNota' => 8.99,
            'septimoNota' => 9.72,
            'octavoNota' => 9.47,
            'novenoNota' => 9.88,
            'decimoNota' => 7.90,
            'primeroBNota' => 8.76,
            'segundoBNota' => 6.96,
            
             ]);

          DB::table('disciplina')->insert([
            
            'puntajeDisciplina' => 10,
           
             ]);

          DB::table('estudiantes')->insert([
            
            'nombreEstudiante' => 'Andrea',
            'apellidoEstudiante' => 'Muela',
            'cedulaEstudiante' => '1232157660',
            'emailEstudiante' => 'andre@gmail.com',
            'telefonoEstudiante' => '27349405',
            'domicilioEstudiante' => 'av ambato y latacunga',
            'idNota' => 4,
            'idCurso' => 1,
            'idDisciplina' => 4,
            'idElegido' => null,

           
             ]);

           

	  DB::table('estudiantes_actitudes')->insert([ // solo la actitud cientifica por ahora
            
            'idEstudiante' => 4,
           // 'idActitud' => 1,
            'idLocalidad' =>4,
            
             ]);
	  /* segundo estudiante*/

         DB::table('notas')->insert([
            
            'segundoNota' => 9.78,
            'terceroNota' => 9.86,
            'cuartoNota' => 9.20,
            'quintoNota' => 9.18,
            'sextoNota' => 8.99,
            'septimoNota' => 9.72,
            'octavoNota' => 9.47,
            'novenoNota' => 9.88,
            'decimoNota' => 7.90,
            'primeroBNota' => 8.76,
            'segundoBNota' => 6.96,
            
             ]);

          DB::table('disciplina')->insert([
            
            'puntajeDisciplina' => 7,
           
             ]);

          DB::table('estudiantes')->insert([
            
            'nombreEstudiante' => 'Julio',
            'apellidoEstudiante' => 'Olivo',
            'cedulaEstudiante' => '1922157660',
            'emailEstudiante' => 'jul@juliocom',
            'telefonoEstudiante' => '27623405',
            'domicilioEstudiante' => 'av galapagos',
            'idNota' => 5,
            'idCurso' => 1,
            'idDisciplina' => 5,
            'idElegido' => null,

           
             ]);

           

	  DB::table('estudiantes_actitudes')->insert([ // solo la actitud cientifica por ahora
            
            'idEstudiante' => 5,
           // 'idActitud' => 1,
            'idLocalidad' =>2,
            
             ]);
    }
}
