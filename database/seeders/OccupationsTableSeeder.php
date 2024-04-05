<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OccupationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $occupations = [
            ['occupation_code' => '1', 'occupation_name' => 'Administración y gerencia', 'description' => 'Conocimiento de principios de negocios y de administración'],
            ['occupation_code' => '2', 'occupation_name' => 'Servicios de oficina y administrativos', 'description' => 'Conocimiento de administración y procedimientos de oficina'],
            ['occupation_code' => '3', 'occupation_name' => 'Economía y contabilidad', 'description' => 'Conocimiento de principios y prácticas de economía'],
            ['occupation_code' => '4', 'occupation_name' => 'Mercadotecnia y ventas', 'description' => 'Conocimiento de principios y métodos para mostrar promover y vender productos o servicios'],
            ['occupation_code' => '5', 'occupation_name' => 'Servicio al cliente', 'description' => 'Conocimiento de principios y procesos para proporcionar al cliente con servicios personales'],
            ['occupation_code' => '6', 'occupation_name' => 'Recursos humanos y de personal', 'description' => 'Conocimiento de principios y procedimientos para buscar seleccionar y capacitar al personal'],
            ['occupation_code' => '7', 'occupation_name' => 'Producción y procesamiento', 'description' => 'Conocimiento de materias primas procesos de producción y otras técnicas para maximizar la producción'],
            ['occupation_code' => '8', 'occupation_name' => 'Producción de alimentos', 'description' => 'Conocimiento de técnicas y de equipo para plantar crecer y cosechar productos alimenticios'],
            ['occupation_code' => '9', 'occupation_name' => 'Computadoras y electrónica', 'description' => 'Conocimiento de tableros de circuito- procesadores- chips- equipo electrónico hardware'],
            ['occupation_code' => '10', 'occupation_name' => 'Ingeniería y tecnología', 'description' => 'Conocimiento sobre la aplicación práctica de ingeniería y tecnología'],
            ['occupation_code' => '11', 'occupation_name' => 'Diseño', 'description' => 'Conocimiento de técnicas de diseño, herramientas y principios'],
            ['occupation_code' => '12', 'occupation_name' => 'Construcción', 'description' => 'Conocimiento conceptual y desarrollo práctico de infraestructura'],
            ['occupation_code' => '13', 'occupation_name' => 'Mecánica', 'description' => 'Conocimiento de máquinas y herramientas'],
            ['occupation_code' => '14', 'occupation_name' => 'Matemáticas', 'description' => 'Conocimiento de aritmética- álgebra- geometría- cálculo y estadística, y sus distintas aplicaciones'],
            ['occupation_code' => '15', 'occupation_name' => 'Física', 'description' => 'Conocimiento y predicción de principios físicos- leyes- sus interrelaciones y aplicaciones'],
            ['occupation_code' => '16', 'occupation_name' => 'Química', 'description' => 'Conocimiento de la composición química-estructura y propiedades de sustancias'],
            ['occupation_code' => '17', 'occupation_name' => 'Biología', 'description' => 'Conocimiento de plantas y organismos animales'],
            ['occupation_code' => '18', 'occupation_name' => 'Psicología', 'description' => 'Conocimiento de la conducta y el comportamiento humano'],
            ['occupation_code' => '19', 'occupation_name' => 'Sociología y antropología', 'description' => 'Conocimiento de la conducta y dinámicas de grupo'],
            ['occupation_code' => '20', 'occupation_name' => 'Geografía y territorio', 'description' => 'Conocimiento de principios y métodos para describir las características de la tierra-del mar y de las masas de aire'],
            ['occupation_code' => '21', 'occupation_name' => 'Medicina y odontología', 'description' => 'Conocimiento de la información y técnicas que se necesitan para diagnosticar y tratar lesiones humanas'],
            ['occupation_code' => '22', 'occupation_name' => 'Educación y capacitación', 'description' => 'Conocimiento de principios y métodos para el diseño e implementación de programas y acciones de capacitación, enseñanza e instrucción'],
            ['occupation_code' => '23', 'occupation_name' => 'Idioma extranjero', 'description' => 'Conocimiento de la estructura y contenido de un idioma extranjero'],
            ['occupation_code' => '24', 'occupation_name' => 'Bellas artes', 'description' => 'Conocimiento de la teoría y técnicas que se requieren para componer, producir y realizar trabajos de música, danza, artes visuales, teatro y escultura.'],
            ['occupation_code' => '25', 'occupation_name' => 'Historia y arqueología', 'description' => 'Conocimiento de sucesos históricos y sus causas, sus indicadores y sus efectos en las civilizaciones y culturas.'],
            ['occupation_code' => '26', 'occupation_name' => 'Filosofía y teología', 'description' => 'Conocimiento de diferentes sistemas filosóficos y religiones.'],
            ['occupation_code' => '27', 'occupation_name' => 'Seguridad pública', 'description' => 'Conocimiento del equipo, las regulaciones, los procedimientos y las estrategias importantes para promover operaciones de seguridad'],
            ['occupation_code' => '28', 'occupation_name' => 'Leyes y gobierno', 'description' => 'Conocimiento de leyes, códigos legales, procedimientos judiciales, jurisprudencia y el proceso político democrático.'],
            ['occupation_code' => '29', 'occupation_name' => 'Telecomunicación', 'description' => 'Conocimiento respecto de la transmisión, radiodifusión, interruptores, control y funcionamiento de los sistemas de telecomunicaciones.'],
            ['occupation_code' => '30', 'occupation_name' => 'Comunicación y medios de comunicación', 'description' => 'Conocimiento de la producción de los medios de comunicación'],
            ['occupation_code' => '31', 'occupation_name' => 'Transporte', 'description' => 'Conocimiento de principios y métodos para transportar a personas o productos por aire, ferrocarril, mar o caminos'],
            ['occupation_code' => '32', 'occupation_name' => 'Normas de contabilidad', 'description' => 'Conocimiento de normas de contabilidad e información Financiera, auditoria y aseguramiento de la Información'],
            ['occupation_code' => '33', 'occupation_name' => 'Finanzas', 'description' => 'Conocimiento de principios y prácticas en finanzas.'],
            ['occupation_code' => '34', 'occupation_name' => 'Herramientas de simulación y diseño', 'description' => 'Conocimiento y utilización de herramientas de simulación y diseño.'],
            ['occupation_code' => '35', 'occupation_name' => 'Interpretación de planos', 'description' => 'Conocimiento e interpretación de planos arquitectónicos, estructurales, electrónicos, entre otros.'],
            ['occupation_code' => '36', 'occupation_name' => 'Manejo de las TIC', 'description' => 'Conocimiento y manejo de las tecnologías de la información y la comunicación'],
            ['occupation_code' => '37', 'occupation_name' => 'Manipulación de alimentos', 'description' => 'Conocimiento en seguridad y salubridad de los alimentos para su respectiva manipulación.'],
            ['occupation_code' => '38', 'occupation_name' => 'Mantenimiento', 'description' => 'Conocimiento en conservación y prevención de una cosa, herramienta, equipo, etc'],
            ['occupation_code' => '39', 'occupation_name' => 'Tanatopraxia', 'description' => 'Conocimiento de técnicas y prácticas que se realizan sobre un cadáver o restos humanos'],
            ['occupation_code' => '40', 'occupation_name' => 'Anatomía', 'description' => 'Conocimiento de la estructura del cuerpo humano.'],
            ['occupation_code' => '41', 'occupation_name' => 'Primeros auxilios', 'description' => 'Conocimiento y técnicas básicas de asistencia en caso de accidente o enfermedad repentina.'],
            ['occupation_code' => '42', 'occupation_name' => 'Primera infancia', 'description' => 'Conocimiento de la educación inicial, trabajo con comunidades'],
            ['occupation_code' => '43', 'occupation_name' => 'Patrimonio cultural', 'description' => 'Conocimiento del patrimonio cultural de la Nación'],
            ['occupation_code' => '44', 'occupation_name' => 'Patrimonio natural', 'description' => 'Conocimiento de lugares o zonas naturales'],
            ['occupation_code' => '45', 'occupation_name' => 'Gestión del riesgo de desastres', 'description' => 'Conocimientos en tipos, causas, fuentes, análisis e identificación de riesgos de desastres.'],
            ['occupation_code' => '46', 'occupation_name' => 'Armonía y composición', 'description' => 'Conocimiento de técnicas para la construcción y progresiones de acordes'],
            ['occupation_code' => '47', 'occupation_name' => 'Ejecución Instrumental', 'description' => 'Conocimiento de técnicas, teorías y principios para ejecutar en un instrumento'],
            ['occupation_code' => '48', 'occupation_name' => 'Instrumentos musicales', 'description' => 'Conocimiento sobre teorías, técnicas, prácticas y usos de instrumentos musicales.'],
            ['occupation_code' => '49', 'occupation_name' => 'Atención integral en salud', 'description' => 'Conocimiento de la conducta y el comportamiento humano; diferencias individuales y colectivas respecto a la convivencia, interacción social, familiar y comunitaria.'],
            ['occupation_code' => '50', 'occupation_name' => 'Servicio a la persona y humanización', 'description' => 'Conocimiento de principios y procesos para proporcionar a las personas, servicios de salud humanizados'],
            ['occupation_code' => '51', 'occupation_name' => 'Medicinas y terapias alternativas', 'description' => 'Conocimiento en los principios y fundamentos de las medicinas y terapias alternativas'],
            ['occupation_code' => '52', 'occupation_name' => 'Moda y belleza', 'description' => 'Conocimientos en morfología, técnica de color, diversidad cultural y tendencias.'],
            ['occupation_code' => '53', 'occupation_name' => 'Producción agrícola y pecuaria', 'description' => 'Conocimiento de sembrar, mantener y cosechar cultivos y pastos, pastoreo, manejo de animales.'],
            ['occupation_code' => '54', 'occupation_name' => 'Gestión y control ambiental', 'description' => 'Conocimiento en el manejo adecuado de materiales y sustancias'],
            ['occupation_code' => '55', 'occupation_name' => 'Salud y seguridad en el trabajo', 'description' => 'Conocimiento del reconocimiento, la evaluación y el control de factores ambientales asociados con el lugar de trabajo.'],
            ['occupation_code' => '56', 'occupation_name' => 'Metodología de investigación', 'description' => 'Conocimiento del conjunto sistemático de estrategias, procedimientos, técnicas, pasos y tareas que se siguen para recolectar información'],
            ['occupation_code' => '57', 'occupation_name' => 'Principios éticos', 'description' => 'Conocimiento de las normas que regulan el comportamiento de la persona dentro de una empresa'],
            ['occupation_code' => '58', 'occupation_name' => 'Diseño de sistemas agroecológicos', 'description' => 'Conocimiento de la disciplina científica agroecológica, el conjunto de prácticas y las etnociencias'],
            ['occupation_code' => '59', 'occupation_name' => 'Corporalidad', 'description' => 'Conocimiento técnico, teórico y práctico del cuerpo humano en estado de reposo y/o movimiento'],
            ['occupation_code' => '60', 'occupation_name' => 'Técnica de tatuaje', 'description' => 'Capacidad de introducir en la dermis y epidermis tintas en diferentes zonas del cuerpo'],
            ['occupation_code' => '61', 'occupation_name' => 'Ciencias políticas y educación cívica', 'description' => 'Conocimiento del gobierno y los principios o la práctica política'],
            ['occupation_code' => '62', 'occupation_name' => 'Derecho', 'description' => 'Conocimiento de los principios, las normas y los procedimientos para mantener formalmente el orden social'],
            ['occupation_code' => '63', 'occupation_name' => 'Trabajo Social', 'description' => 'Conocimiento de referentes epistemológico, ontológico, teóricoconceptual, metodológico y ético-político'],
            ['occupation_code' => '64', 'occupation_name' => 'Diseño y administración de redes y bases de datos', 'description' => 'Conocimiento del diseño, el mantenimiento y la integración de aplicaciones de software.'],
            ['occupation_code' => '65', 'occupation_name' => 'Bibliotecología, información y archivología', 'description' => 'Conocimiento de los métodos de selección, adquisición, organización y almacenamiento de las colecciones de información'],
            ['occupation_code' => '66', 'occupation_name' => 'Materiales (vidrio, papel, plástico y madera)', 'description' => 'Conocimiento de la fabricación de productos en vidrio, papel, plástico, madera u otros materiales'],
            ['occupation_code' => '67', 'occupation_name' => 'Bioquímica', 'description' => 'Conocimiento de los procesos químicos en los organismos vivos.'],
            ['occupation_code' => '68', 'occupation_name' => 'Estadística', 'description' => 'Conocimiento de la recolección, la descripción, la organización y el análisis de datos numéricos.'],
            ['occupation_code' => '69', 'occupation_name' => 'Deportes', 'description' => 'Conocimiento de técnicas y habilidades en un deporte elegido']
        ];

        DB::table('occupations')->insert($occupations);
    }
}
