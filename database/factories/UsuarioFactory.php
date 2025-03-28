<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $nombresPorLetra = [
        'A' => ['Alejandro', 'Ana', 'Alberto', 'Aurora', 'Antonio'],
        'B' => ['Beatriz', 'Bruno', 'Bernardo', 'Bárbara', 'Benjamín'],
        'C' => ['Carlos', 'Carmen', 'César', 'Clara', 'Cristina'],
        'D' => ['Daniel', 'Diana', 'Diego', 'Dolores', 'David'],
        'E' => ['Eduardo', 'Elena', 'Esteban', 'Ernesto', 'Eva'],
        'F' => ['Francisco', 'Felipe', 'Fernanda', 'Fabiola', 'Federico'],
        'G' => ['Gabriel', 'Gloria', 'Gerardo', 'Graciela', 'Guillermo'],
        'H' => ['Hugo', 'Helena', 'Héctor', 'Horacio', 'Hilda'],
        'I' => ['Ignacio', 'Isabel', 'Iván', 'Irene', 'Inés'],
        'J' => ['José', 'Julia', 'Javier', 'Jimena', 'Joaquín'],
        'K' => ['Kevin', 'Karla', 'Kurt', 'Katherine', 'Kilian'],
        'L' => ['Luis', 'Lucía', 'Leandro', 'Lorena', 'Leonardo'],
        'M' => ['Miguel', 'María', 'Mauricio', 'Mónica', 'Martín'],
        'N' => ['Nicolás', 'Nadia', 'Norma', 'Nelson', 'Noemí'],
        'O' => ['Óscar', 'Olga', 'Orlando', 'Ofelia', 'Omar'],
        'P' => ['Pablo', 'Patricia', 'Pedro', 'Paula', 'Pascual'],
        'Q' => ['Quintín', 'Queralt', 'Quirino', 'Quiana', 'Quetzali'],
        'R' => ['Ricardo', 'Rosa', 'Ramón', 'Regina', 'Raúl'],
        'S' => ['Sergio', 'Silvia', 'Salvador', 'Sara', 'Sebastián'],
        'T' => ['Tomás', 'Teresa', 'Teodoro', 'Tatiana', 'Tobías'],
        'U' => ['Ulises', 'Ursula', 'Ubaldo', 'Unai', 'Uriel'],
        'V' => ['Víctor', 'Valeria', 'Verónica', 'Vicente', 'Vanessa'],
        'W' => ['Walter', 'Wendy', 'Wilfredo', 'Winona', 'William'],
        'X' => ['Ximena', 'Xavier', 'Xóchitl', 'Xenia', 'Xandro'],
        'Y' => ['Yolanda', 'Yahir', 'Yasmin', 'Yonathan', 'Yadira'],
        'Z' => ['Zacarías', 'Zulema', 'Zara', 'Zoilo', 'Zenaida']
    ];
    protected $apellidosPorLetra = [
        'A' => ['Alonso', 'Álvarez', 'Acevedo', 'Aguilar', 'Arroyo'],
        'B' => ['Benítez', 'Bermúdez', 'Barragán', 'Bautista', 'Bustamante'],
        'C' => ['Castillo', 'Cervantes', 'Carrasco', 'Cordero', 'Cruz'],
        'D' => ['Díaz', 'Delgado', 'Domínguez', 'Duarte', 'De la Torre'],
        'E' => ['Escobar', 'Esquivel', 'Estrada', 'Espinoza', 'Echeverría'],
        'F' => ['Fernández', 'Fuentes', 'Franco', 'Figueroa', 'Ferrer'],
        'G' => ['González', 'Gómez', 'Guerrero', 'Gutiérrez', 'Galván'],
        'H' => ['Hernández', 'Hidalgo', 'Herrera', 'Huerta', 'Hinojosa'],
        'I' => ['Ibarra', 'Izquierdo', 'Ibáñez', 'Infante', 'Illanes'],
        'J' => ['Jiménez', 'Juárez', 'Jaramillo', 'Jaime', 'Jerez'],
        'K' => ['Kuri', 'Kantún', 'Kraus', 'Kovacs', 'Klein'],
        'L' => ['López', 'Lara', 'Linares', 'Luján', 'Lemus'],
        'M' => ['Martínez', 'Morales', 'Medina', 'Mendoza', 'Montes'],
        'N' => ['Navarro', 'Nieto', 'Núñez', 'Navas', 'Nevárez'],
        'O' => ['Ortega', 'Orozco', 'Ochoa', 'Ordóñez', 'Ocampo'],
        'P' => ['Pérez', 'Pineda', 'Peña', 'Palacios', 'Pacheco'],
        'Q' => ['Quintana', 'Quintero', 'Quiroga', 'Quezada', 'Quijano'],
        'R' => ['Ramírez', 'Rojas', 'Rodríguez', 'Rangel', 'Ruiz'],
        'S' => ['Sánchez', 'Santos', 'Sosa', 'Sierra', 'Salazar'],
        'T' => ['Torres', 'Trejo', 'Toledo', 'Téllez', 'Tovar'],
        'U' => ['Urbina', 'Uribe', 'Ureña', 'Ugalde', 'Urquiza'],
        'V' => ['Vargas', 'Vázquez', 'Velázquez', 'Vera', 'Villanueva'],
        'W' => ['Wong', 'Wilches', 'Weber', 'Waldemar', 'Wenceslao'],
        'X' => ['Ximénez', 'Xochitl', 'Xavier', 'Xicohténcatl', 'Xicoténcatl'],
        'Y' => ['Yáñez', 'Yagüe', 'Yepez', 'Yero', 'Ybarra'],
        'Z' => ['Zamora', 'Zárate', 'Zúñiga', 'Zepeda', 'Zavala']
    ]; 
 


    public function definition(): array
    {
        $letrasAlfabeto = range('A', 'Z');
        $inicial = $letrasAlfabeto[array_rand($letrasAlfabeto)];
        $nombre =  $this->nombresPorLetra[$inicial][array_rand($this->nombresPorLetra[$inicial])];
        $apellido = $this->apellidosPorLetra[$inicial][array_rand($this->apellidosPorLetra[$inicial])];
        $username = strtolower($inicial) . strtolower($apellido);

        return [
            'nombre'=>$nombre . ' ' . $apellido,
            'nombre_usuario'=> fake()->unique()->userName(),// $username,
            'clave'=>Hash::make('123'),
            'correo'=>fake()->email(),
            'direccion'=>fake()->address(),
        ];
    }
}
