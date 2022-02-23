<?php

namespace Database\Seeders;

use App\Models\GlosarioContenido;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class GlosarioContenidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('glosario_contenidos')->truncate();

        GlosarioContenido::create([
            'contenido'        => '
            Arcilla

Material natural y fino compuesto por silicato de aluminio hidratado. Esta sustancia mineral se origina por la descomposición y posterior transporte y depósito de rocas feldespáticas y graníticas. La principal propiedad de la arcilla, y la que permite la fabricación de la cerámica, es su plasticidad en estado húmedo, lo que permite formar una pasta moldeable que se encoge cuando se endurece. Se llama arcilla magra aquella que es muy poco plástica y que es difícil de modelar; el caso inverso es el de la arcillas grasas o pegajosas. La composición mineralógica de las arcillas varía según la naturaleza de la roca de origen y las modalidades de descomposición y depósito. (Arguello)(Balfet et al)
Cerámica

Para este manual retomamos el termino propuesto por Balfet y otros (1992) para la definición de los objetos de cerámica, se trata de elementos elaborados de arcilla los cuales han sido sometidos a un proceso de deshidratación por medio de la cocción. 
Pasta

Masa formada por la unión de arcilla, agua y una proporción variable de inclusiones de desgrasante (orgánicas o inorgánicas) que ha sido sometido a la cocción para formar la cerámica. La pasta que resulta del amasado toma forma cuando está en estado plástico y adquiere firmeza gracias a la cocción. (Echeverria; Fenoglio y Rubio y Balfet et al (1992))
Desgrasante

Sustancia no plástica (orgánica o inorgánica) que se agrega intencionalmente a la arcilla para modificar su consistencia y reducir su plasticidad, con el fin de facilitar la desecación y dar una mayor cohesión, evitando el agrietamiento durante el secado o la cocción. Estos componentes también pueden estar contenidos en la arcilla de forma natural. En Colombia los desgrasantes comúnmente utilizados por los alfareros son: roca triturada, arena de río, tiesto molido, concha molida y vegetales. (Argüello; Balfet et al; Echeverria).
Amasado

Operación de mezclar la arcilla, con el agua y el desgrasante para formar una masa maleable y homogénea, por medio de movimientos repetitivos usando las manos y/o los pies. (Balfet et al) (Fenoglio y Rubio)
Descripción de la Pasta

La descripción de la pasta se realiza empleando como criterios la escala granulométrica y la proporción de antiplástico con la que cuenta la pasta. Es decir, para esta descripción se toma en cuenta el tamaño y la cantidad de antiplástico presente en el fragmento cerámico (Balfet et al)
Textura

Apariencia general de la superficie de una pieza de cerámica, dada por el acabado y la composición granulométrica de la pasta, es decir, las características de las partículas que la componen (cantidad, tamaño y orientación de las inclusiones). (Argüello; Balfet et al; Echeverria).
',
            'glosario_menu_id' => config('glosario.Aspectos Tecnológicos.Terminos Generales')
        ]);

        GlosarioContenido::create([
            'contenido'        => '
Este apartado se refiere a las técnicas utilizadas para la transformación del barro en la obtención de la forma de una vasija de cerámica (Fenoglio y Rubio)
Modelado por rollos o Enrollado



Elaboración de una vasija usando rollos o cordeles de arcilla que se adhieren unos encima de otros o en espiral hasta elaborar el cuerpo de la vasija. Posteriormente las uniones de los rollos se alisan hasta que la superficie sea homogénea, no queden orificios entre ellos y no se puedan diferenciar. Los criterios para su identificación son: fracturas paralelas a la dirección de los rollos; orientación horizontal de las partículas de arcilla, visible si se comparan las fracturas horizontales y verticales; presencia de surcos horizontales, cuando la elaboración es burda y los rollos no han sido correctamente pegados; cuando los rollos son visibles por razones de orden decorativo. (Argüello; Balfet et al; Echeverria).
Moldeado

Elaboración de objetos en serie, en donde la arcilla es colocada en un molde cóncavo o convexo por medio de vaciados, ya sea por colado o por presión, el objeto toma su forma. En el caso de las vasijas, el moldeado puede ser efectuado ya sea en una sola operación (vasijas de formas abierta) o procediendo al moldeado en dos partes que se sueldan luego una a la otra (vasijas cerradas).  El moldeado se emplea también para la fabricación de figurillas o de objetos pequeños utilizando un solo molde o moldeando las diferentes partes de la pieza separadamente. (Argüello; Balfet et al; Echeverria).
Torneado

Elaboración de piezas de cerámica utilizando el torno alfarero. Se denomina torno de alfarero a un dispositivo giratorio que permite dar a una masa de arcilla un movimiento circular a la velocidad necesaria (aproximadamente 60 vueltas por minuto) para crear la forma deseada, gracias al efecto conjunto de las manos y de la fuerza centrífuga. Los criterios de identificación son: Perfecta simetría axial; Regularidad de espesor a la misma altura del recipiente; Estrías horizontales; surcos horizontales, concéntricos o en espiral, internos o, a veces, externos; El criterio de identificación más seguro puede observarse en los tiestos: es el caso de las fracturas verticales que muestran chevrons encajados que resultan del movimiento ascendente de la arcilla. (Balfet et al)
',
            'glosario_menu_id' => config('glosario.Aspectos Tecnológicos.Técnicas De Manufactura'),
        ]);

        GlosarioContenido::create([
            'contenido'        => '
Operación que consiste en someter un objeto, elaborado con pasta arcillosa, a una temperatura suficiente para que se produzca una transformación irreversible de deshidratación. La cocción provoca diversas transformaciones según la temperatura alcanzada, la atmósfera de cocción y la naturaleza de la arcilla. 
Temperatura 

La temperatura se refiere al grado o nivel térmico al que es sometido la arcilla para su cocción y obtención de las piezas cerámicas.
La mayoría de los objetos de cerámica son sometidos a una temperatura que varía entre 500°C (temperatura que puede ser fácilmente alcanzada con un fuego al aire libre) y 1400 - 1500°C (temperaturas que requieren una instalación construida y un fuego prolongado). La identificación del grado de cocción por medio de un examen de los productos exige la utilización de métodos especializados (dilatometría, mineralogía). faltan citas  
Atmósfera de Cocción 

Ambiente al que estarán sometidas las piezas durante la cocción y depende de la cantidad de oxígeno que esté presente y de la mezcla gaseosa que rodea las piezas cerámicas durante la cocción. La atmósfera puede controlarse de manera más o menos adecuada según las instalaciones donde se lleva a cabo la cocción y puede variar, voluntariamente o no, durante la cocción entre oxidante y reductora. (Fenoglio y Rubio)
Atmósfera Oxidante

Se refiere a uno de los ambientes al cual es sometida las piezas cerámicas en el proceso de cocción. Se denomina atmosfera oxidante cuando el ambiente de cocción contiene oxígeno libre y favorece la oxidación de las pastas, especialmente, de las materias orgánicas y compuestos ferrosos, por lo cual, logra una combustión completa del carburante y los minerales de la pasta. Generalmente la cerámica sometida a este tipo de atmósfera se caracteriza por la uniformidad de color ya que todos los componentes se logran cocer homogéneamente. (Balfet et al; Fenoglio y Rubio) 
Atmósfera Reductora

Se refiere a uno de los ambientes al cual es sometida las piezas cerámicas en el proceso de cocción. Se denomina atmosfera reductora cuando el ambiente de cocción no contiene oxígeno libre o su cantidad es menor; la combustión de las materias orgánicas se produce lentamente y los compuestos ferrosos no se oxidan. Por lo tanto, no es suficiente para lograr la completa combustión del carburante ni de los minerales de la pasta. Cuando el barro contiene materia orgánica ésta tiende a acumularse en el centro formando un núcleo negro o gris; este fenómeno se relaciona con la manera en que se descompone el carbón cuando es sometido al calor. Cuando una pasta no contiene materia orgánica y se cuece bajo una atmósfera reductora, no habrá carbón que se deposite en el centro creando un núcleo negro o gris; sin embargo, cuando las arcillas presentes en el barro son finas se crea un “núcleo inverso” donde el centro será rojizo y los márgenes negros o grisáceos. (Balfet et al; Fenoglio y Rubio) 
Cocción abierta al aire libre

Se trata de una cocción sin estructuras y de corta duración, por lo que no requiere mantenimiento. Se lleva a cabo a ras de suelo, en donde se ubican las piezas junto con el combustible y se mantiene vivo el fuego el tiempo necesario. Este tipo de cocción es incontrolada, por lo cual, la cocción no puede darse de manera uniforme y las piezas tienden a presentar distintos matices que van desde rojo hasta negro. (Arguello; Balfet et al; Fenoglio y Rubio) 
Cocción cerrada o en horno

Cocción realizada en hornos cerrados, que separa las piezas del combustible y tiene el propósito de guardar y controlar el calor. El horno es una construcción que consta de una cámara de cocción, donde se colocan las piezas cerámicas, que puede cerrarse de manera permanente o temporal, y de un fogón donde el fuego puede mantenerse controlado. Al quemarse el combustible dentro de la cámara de combustión se producen gases que circulan hacia la cámara de cocción; dichos gases reaccionan con los minerales de las vasijas al mismo tiempo que las calientan. En este tipo de cocción se puede controlar la atmósfera creando aberturas para permitir la circulación de aire (oxidante) o sellándolas para restringir la entrada de éste (reductora). Las ventajas de este tipo de cocción son: Puede alcanzar temperaturas mayores a 1000 –1300°C; se puede controlar el tipo de atmósfera y se tiene el control sobre el incremento de la temperatura. Para la época prehispánica en Colombia no se ha reportado la presencia de hornos (construcciones por encima del nivel del suelo), por lo que se supone que eran hornos de pozo, es decir, hoyos excavados en la tierra, lo que produce una cocción intermedia entre la abierta y el horno. (Argüello; Balfet et al; Fenoglio y Rubio).
',
            'glosario_menu_id' => config('glosario.Aspectos Tecnológicos.Cocción'),
        ]);

        GlosarioContenido::create([
            'contenido'        => '1. El primer paso consiste en establecer la forma general de la vasija. Esta forma recibe su nombre de acuerdo con normas preestablecidas que se basan en la relación general entre altura y diámetro.
2. El siguiente paso sería la caracterización de la forma particular. El objetivo de este análisis es distinguir y describir las partes contenidas en la forma general. Para lograr la homogeneidad en la definición de la forma particular es necesario seguir ciertas normas generales:
a. Primera norma: utilizar términos geométricos dentro de la descripción. 
b. Segunda norma: cada una de las partes se debe describir desde un punto de vista perfectamente ortogonal y considerando un eje central que parte en dos la vasija. En el caso del fondo, este se describe desde una posición imaginaria, como si el observador se encontrara en el interior y sobre el fondo de la vasija.
c. La tercera norma: toda vasija debe ser descrita de arriba hacia abajo, empezando por el borde o labio, dependiendo del caso, concluyendo en la parte que le da apoyo o sustento, ya sean los soportes o la base.  (Fenoglio y Rubio 2004)
',
            'glosario_menu_id' => config('glosario.Aspectos Metodologicos Para Descripcion Vasija.Metodología Para La Descripción'),
        ]);

        GlosarioContenido::create([
            'contenido'        => '
Las tres partes básicas de una vasija son: boca, cuerpo y base.
De acuerdo con la forma y el perfil de la vasija, se describen otras partes como labio, borde, cuello, hombro, fondo y soporte.
Las demás partes que no modifican el perfil de la vasija y que se añaden como respuesta funcional o decorativa se denominan elementos complementarios como: asa, agarradera, mango, vertedera. 
A su vez las vasijas se dividen en simples o compuestas de acuerdo a su forma.  (Argüello).(Prieto et al, 1987: 20, Rice). (Balfet, Heras, Rice, Rojas). (Fonseca, 1992).',
            'glosario_menu_id' => config('glosario.Aspectos Metodologicos Para Descripcion Vasija.Partes Básicas De Una Vasija'),
        ]);

        GlosarioContenido::create([
            'contenido'        => '1. Vasijas simples. Vasijas conformadas por un solo recipiente
2. Vasijas compuestas. Vasijas conformadas por dos o más  recipientes
3. Vasijas antropomórfas. Vasijas simples o compuestas que en su totalidad o en una de sus partes representa la figura humana
4. Vasijas zoomórfas. Vasijas simples o compuestas que en su totalidad o en una de sus partes representa la figura animal
5. Vasijas fitomórfas. Vasijas simples o compuestas que en su totalidad o en una de sus partes representa un vegetal o alguna parte de una planta (fruto, raíz, flor, hoja)
6. Vasijas antropo-zoomorfás: Vasijas simples o compuestas que en su totalidad o en una de sus partes representa una composición entre la figura animal y la figura humana
7. Vasija maqueta: Vasijas simples o compuestas que en su totalidad o en una de sus partes representa una vivienda o construcción
8. Vasijas mocasín: Vasijas simples en forma de zapato',
            'glosario_menu_id' => config('glosario.Aspectos Metodologicos Para Descripcion Vasija.Tipos De Vasija'),
        ]);

        GlosarioContenido::create([
            'contenido'        => '
Abertura superior de la vasija que permite el acceso y la extracción de su contenido. Está delimitada por el borde y el labio. Generalmente, el centro de esta abertura coincide con el eje de la vasija. Su morfología y descrpcion se definen por medio de formas geométricas. 

La boca tiene un diámetro interno, correspondiente a la abertura de la vasija, y un diámetro externo, correspondiente a la parte externa del borde y labio. (Fenoglio y Rubio, 2004: 107; Heras, 1992, p. 14; Rojas, 1994: 11; Prieto, 1987: 20). (Balfet et al, 1992, p. 15)

 Descripción de acuerdo a su morfología 
 
 
Boca circular
La abertura de la boca tiene la forma de círculo (Fenoglio y Rubio, 2004: 107; RAE).
Boca elíptica
La abertura de la boca tiene forma de una elipse (Fenoglio y Rubio, 2004: 107; RAE).


Boca ovoidal
La abertura de la boca tiene forma ovoidal  (Fenoglio y Rubio, 2004: 107; RAE).
Boca cuadrada
La abertura de la boca tiene forma de un cuadrado  (Fenoglio y Rubio, 2004: 107; RAE).
Boca rectangular
La abertura de la boca tiene forma de un rectángulo (Fenoglio y Rubio, 2004: 107; RAE).
Boca romboidal
La abertura de la boca tiene forma de un rombo (Fenoglio y Rubio, 2004: 107; RAE).


Boca asimétrica
La abertura de la boca carece de simetría y no describe una forma geométrica específica.


Boca doble
La abertura de la boca presenta formas geométricas similares unidas, por ejemplo, dos círculos.',
            'glosario_menu_id' => config('glosario.Elementos Que Conforman Una Vasija.Boca'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Parte superior que circunda la boca de la vasija, a la cual se une el cuello o cuerpo. La sección terminal del borde recibe el nombre de labio. Los bordes se clasifican según atributos de dirección y forma.  (Balfet et al, 1992, p. 15; Fenoglio y Rubio, 2004: 107; Prieto, 1987: 20; Rojas, 1994: 11). (Heras, 1992, p. 14). 
            
            
Descripción por su dirección

Borde recto
Borde que describe una línea recta sin inclinación, curvaturas o ángulos. (Argüello; RAE; Rojas, 1994)





Borde evertido
Borde divergente hacia el exterior de la vasija con respecto al cuello o el cuerpo (Argüello; RAE; Rojas, 1994)





Borde invertido
Borde convergente hacia el interior de la vasija con respecto al cuello o el cuerpo. (Argüello; RAE; Rojas, 1994)





Descripción de acuerdo a su morfología

Adelgazado
Borde que presenta menor grosor que las paredes del cuello o cuerpo de la vasija.  (Fenoglio y Rubio, 2004: 107; RAE)


Engrosado
Borde que presenta mayor grosor que las paredes del cuello o el cuerpo de la vasija.  (Fenoglio y Rubio, 2004: 107; RAE)




Doblado
Borde que ha sido plegado hacia la cara externa de la vasija.  (Prieto, 1987: 20)




Reforzado  externamente
Borde que presenta un refuerzo agregado en la parte superior externa de la vasija. (Prieto, 1987: 20)


Reforzado internamente
Borde que presenta un refuerzo agregado en la parte superior interna de la vasija.  (Prieto, 1987: 20)





Compuesto


Borde que presenta un marcado cambio de dirección en la curva de su perfil, Puede tener una o más curvas o angulos por encima del cuello de la vasija.  (Heras, 1992: 15)  (Meggers y Evans, 1969). (leroiGourhan, 197 4: 187).”




Plano
Borde que sobresale horizontalmente del cuello o del cuerpo, conformando un anillo plano alrededor de la boca.  (Fenoglio y Rubio, 2004: 107)


Borde modelado
Borde que presenta algún tipo de modelado, modificando su forma.  (Ver: Decoración modelada)',
            'glosario_menu_id' => config('glosario.Elementos Que Conforman Una Vasija.Borde (Direccion)'),
        ]);

        GlosarioContenido::create([
            'contenido'        => '
Extremidad terminal del borde de la vasija. Su descripción atiende a motivos formales. (Argüello, sp: 46; Balfet et al, 1992: 16; Fenoglio y Rubio, 2004: 111; Heras, 1992: 26; Prieto, 1987, Prieto, 1987: 20; Rojas, 1994: 32)


Descripción de acuerdo a su morfología

Labio Redondeado
Labio convexo, curvo en su totalidad.  (Argüello; Fenoglio y Rubio, 2004: 107; Rojas, 1994: 11)





Labio Ojival
Labio convexo que termina en forma de elipse aguda  (Fenoglio y Rubio, 2004: 107)




Labio Cóncavo
Labio curvado hacia adentro del borde.


Labio Plano
Labio que presenta un corte recto
Rojas (1994) no lo describe.







Labio biselado externo
Labio con un corte oblicuo inclinado hacia el exterior de la vasija.  (Argüello; Fenoglio y Rubio, 2004: 107; Heras, 1992: 14; Rojas, 1994: 11)





Labio biselado interno
Labio con un corte oblicuo inclinado hacia el interior de la vasija. (Argüello; Fenoglio y Rubio, 2004: 107; Rojas, 1994: 11)',
            'glosario_menu_id' => config('glosario.Elementos Que Conforman Una Vasija.Labio'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Parte de la vasija que se encuentra entre el borde y el cuerpo. No todas las vasijas lo presentan y este se describe de acuerdo a su dirección o forma.  (Rojas, 1994: 15) (Argüello, 46) (Heras, 1992: 18)  (Fenoglio y Rubio, 2004: 107) (Castro et al, 1987: 183)(Rey Castiñeira, 1991: 16) (Prieto, 1987, p. 21)
            
           Descripción de acuerdo a su morfología  
           
           
Cuello Evertido
Cuello con paredes divergentes, curvas o rectas, que se inclinan hacia el exterior con respecto al cuerpo de la vasija. (Argüello; RAE; Rojas, 1994)



Cuello Invertido
Cuello con paredes convergentes, curvas o rectas, que se inclinan hacia el interior con respecto al cuerpo de la vasija.

Argüello; RAE; Rojas, 1994)



Cuello Recto
Cuello con paredes paralelas, que describen una línea recta (Argüello; RAE; Rojas, 1994)



Cuello curvo convergente
Cuello con paredes curvas convexas que generan una forma elipsoidal o esférica.  Rojas (1994) ',
            'glosario_menu_id' => config('glosario.Elementos Que Conforman Una Vasija.Cuello'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Parte de la vasija conformada por la intersección entre el cuerpo y el cuello (o la boca), que generalmente constituye un ángulo. Se clasifica por su forma. (Echeverria, 2011: 215) (Rojas, 1994: 28) (Heras, 1992: 24)
            
Descripción de acuerdo a su morfología

Hombro angular
Hombro cuya forma presenta mas de un arista formando un ángulo faltan citas  


Hombro redondeado
Hombro cuya forma es redondeada faltan citas  


Hombro plano
Hombro cuya forma es plana o recta faltan citas  ',
            'glosario_menu_id' => config('glosario.Elementos Que Conforman Una Vasija.Hombro'),
        ]);

        GlosarioContenido::create([
            'contenido'        => '
CUERPO

Parte principal de la vasija situada entre la base y el cuello (Argüello, 46; Balfet, 1992: 15; Rojas, 1994: 15). Cuando no tiene cuello, el cuerpo termina donde empieza el borde (Fenoglio y Rubio, 2004: 106). La función específica de esta parte es contener líquidos o sólidos. Para su caracterización se usan las formas geométricas que describen el perfil de las paredes del cuerpo (Fonseca, 1992: 10; Heras, 1992: 19; Prieto, 1987, p. 21; Rice, 1987: 219).  A su vez, el perfil del cuerpo se puede clasificar como simple o  compuesto: el primero describe parcial o totalmente formas geométricas y el segundo presenta puntos de intersección en el perfil por la unión de varias formas geométricas. (Fenoglio y Rubio, 2004: 106). La caracterización del cuerpo es fundamental, pues permite determinar la forma de la vasija.


Cuerpo de forma simple

Vasija cuya forma puede describirse con referencia a un volumen geométrico elemental (Argüello, 46; Balfet, 1992: 15; Rojas, 1994: 15).
Cuerpo esférico
Cuerpo cuyo contorno tiene forma de esfera. También es conocido como globular. (Rojas, 1994: 16).


Cuerpo semi -esférico
Cuerpo cuyo contorno tiene forma de media esfera o menos. También es conocido como semiglobular. (Rojas, 1994: 16).


Cuerpo elipsoide
Cuerpo cuyo contorno tiene forma de un elipsoide o de esfera alargada, su orientación puede ser vertical u horizontal. faltan citas  





Cuerpo cilíndrico
Cuerpo cuyo contorno tiene la forma de un cilindro, ya sea horizontal o vertical. (Rojas, 1994: 15).




Cuerpo hipérboloide
Cuerpo cuyo contorno tiene forma hipérboloide, es decir, con paredes curvas divergentes hacia el exterior con respecto al eje de la vasija. 
RAE




Cuerpo hipérboloide truncado
Cuerpo cuyo contorno tiene la forma de una hipérbola cortada en uno de sus planos. (RAE)


Cuerpo cónico
Cuerpo cuyo contorno tiene la forma de cono, es decir, con paredes rectas divergentes con respecto al eje de la vasija. (RAE)




Cuerpo troncocónico
Cuerpo cuyo contorno tiene la forma de un cono cortado en uno de sus planos. (RAE)


Cuerpo cubico
Cuerpo cuyo contorno tiene la forma de un cuadrado (RAE)


Cuerpo paralelepípedo
Cuerpo cuyo contorno tiene la forma de un rectángulo (RAE).


Cuerpo de forma compuesta

Vasija cuya forma no puede describirse con referencia a un volumen geométrico elemental. (Echeverria) Se trata de vasijas por la union de varias formas geométricas 
Vasijas de formas especificas 

Vasijas que representan formas específicas (antropomorfa, zoomorfa, fitomorfa, maqueta, naviforme, zapatiforme, etc.)  (Fenoglio y Rubio) 
Vasija de cuerpo doble
Cuerpo compuesto por la union de dos vasiijas formas geométricas o por dos formas complejas no geométricas(Rojas, 1994: 16).





Vasija de cuerpo aquillado
Cuerpo compuesto por dos formas geométricas elementales que en su punto de intersección generan una punta saliente con ángulo oblicuo.  (Rojas, 1994: 15)




Vasija antropomorfa  
Vasija que representa la figura humana o alguna parte del cuerpo humano (cabeza, pie, etc), cuya figura hace parte de la forma del recipiente. (Rojas, 1994: 15)


Vasija zoomorfa
Vasija que representa la figura de un animal o parte de este (Rojas, 1994: 16).




Vasija fitomórfa
Vasija que representa un vegetal o alguna parte de una planta (fruto, raíz, flor, hoja) (Rojas, 1994: 34)


Vasija maqueta
Vasija que representa una o varias casas, cuya figura hace parte de la forma del recipiente.  (Rojas, 1994: 34)


Vasija naviforme
Vasija de cuerpo aquillado, asimmetrico con respecto al eje central  (Rojas, 1994: 13).




Mocasín o zapatiforme 
Cuerpo de forma alargada similar a un zapato  (Rojas, 1994: 34) (Heras, 1992: 14)',
            'glosario_menu_id' => config('glosario.Elementos Que Conforman Una Vasija.Cuerpo (De Forma Compuesta)'),
        ]);

        GlosarioContenido::create([
            'contenido'        => '
FONDO

Cara interna de la parte inferior de la vasija que se contrapone a la base (Balfet, 18; Prieto, 1987, p. 21; Rojas, 1994: 24). Para su descripción se tienen en cuenta sus atributos formales (plano, cóncavo, convexo), su acababo (liso, rugoso, con protuberancias, decorado) (Fenoglio y Rubio, 2004: 106) y su funcionalidad (rallador, colador) (Heras, 23).
Fondo plano
Fondo que muestra una superficie recta o plana . faltan citas  
Fondo cóncavo
Fondo curvado hacia el interior de la vasija, Generalmente existe continuidad con el cuerpo. faltan citas  
Fondo convexo
Forma de fondo curvada hacia el exterior de la vasija, . Generalmente existe continuidad con el cuerpo. faltan citas  
Fondo liso
Fondo con un acabado alisado o bruñido. faltan citas  
Fondo rugoso
Fondo con un acabado burdo y con irregularidades. faltan citas  
Fondo decorado
Fondo que presenta con algún tipo de decoración. faltan citas  
Fondo con incisiones funcionales 
Fondo que presenta incisiones o acanalados usados para rallar alimentos. faltan citas  
Fondo con protuberancias
Fondo que presenta protuberancias (modeladas, moldeadas, etc) agregadas de forma intencional. faltan citas  
Fondo con  agujeros
Fondo con perforaciones, generalmente pequeñas y redondeadas, que se realizan con el fin de extraer líquidos o separar sólidos de diferente tamaño. (Heras, 1992: 11)
',
            'glosario_menu_id' => config('glosario.Elementos Que Conforman Una Vasija.Fondo'),
        ]);

        GlosarioContenido::create([
            'contenido'        => '
BASE

Parte inferior externa sobre la cual descansa la vasija que finaliza donde comienza el cuerpo. Cuando no presenta soportes, la base sirve para apoyar la vasija en reposo. De acuerdo con la mayoría de los autores, la base se diferencia del fondo y su descripción se realiza únicamente desde el exterior de la vasija. La base se define atendiendo a sus atributos formales como plana, cóncava o convexa. (Argüello, 45; Balfet et al, 1992: 18; Fenoglio y Rubio, 2004: 105-106; Heras, 13; Rojas, 1994: 11).


Descripción de acuerdo a su morfología

Base Convexa
Forma de base curvada hacia el exterior de la vasija. Generalmente existe continuidad con el cuerpo (Argüello, Balfet et al, 1992: 18; Fenoglio, RAE, Rojas).


Base Cóncava
Forma de base curvada hacia el interior de la vasija. Presenta discontinuidad en su transición al cuerpo (Argüello, Balfet et al, 1992: 18; Fenoglio, RAE, Rojas)


Base Plana 
Forma de base que presenta una superficie recta sin relieves.  En su transición al cuerpo de la vasija muestra discontinuidad (Argüello; Balfet et al, 1992; Heras; Fenoglio y Rubio, 2004; RAE, Rojas, Prieto, 1987)',
            'glosario_menu_id' => config('glosario.Elementos Que Conforman Una Vasija.Base'),
        ]);

        GlosarioContenido::create([
            'contenido'        => '
SOPORTE

Elemento que se agrega a la base y sobre la cual se apoya la vasija, manteniéndola en reposo. También se pueden encontrar algunos soportes independientes de la vasija. Estos se describen con base en criterios formales.  (Rojas, 1994: 44) (Heras, 1992: 29) (Mirambell, 1983).” (Fenoglio y Rubio, 2004: 105)


Descripción de acuerdo a su morfología

Soporte semi esférico
Soporte cuyo contorno tiene forma de media esfera invertida. Otros autores lo denominan campaniforme.(Rojas, 1994: 14)


Soporte elíptico
Soporte con forma de elipse.


Soporte cilíndrico
Soporte de paredes rectas que se asemeja a un tubo. Otros autores lo denominan tubular. (Rojas, 1994: 48).




Soporte hipérboloide
Soporte cuyo contorno tiene la forma de una hipérbola, es decir, con paredes curvas divergentes hacia el exterior del eje de la vasija. RAE





Soporte hipérboloide truncado
Soporte cuyo contorno tiene la forma de una hipérbola cortada en uno de sus planos. RAE


Soporte cónico
Soporte cuyo contorno tiene la forma de cono, es decir, con paredes rectas divergentes. RAE


Soporte cono truncado
Soporte cuyo contorno tiene la forma de un cono cortado en uno de sus planos. RAE (Rojas, 1994: 48)




Soporte cuadrado
Soporte cuyo contorno tiene la forma de un cuadrado RAE.


Soporte rectangular
Soporte cuyo contorno tiene la forma de un rectángulo. RAE


Soporte anular
Rodete o anillo plano y bajo que se adhiere a la base de la vasija para darle estabilidad. (Adame, Echeverría)


Soporte calado
Soporte hueco que presenta corte en secciones en sus paredes, con el fin de formar diferentes siluetas, manteniendo la función de sostener la vasija. Otros autores lo denominan soporte con ventanas. faltan citas  


Soporte Trípode
Soporte con apoyo compuesto por tres patas. (Rojas, 1994: 48)





Soporte Tetrápode
Soporte con apoyo compuesto por cuatro patas. (Rojas, 1994: 47)




Soporte Mamiforme
Soporte con representación de mamas. (Rojas, 1994: 34)




Soporte De Argolla
Soporte compuesto por aros gruesos añadidos a la base levantándo la vasija.  faltan citas  


Pedestal
Soporte, sólido o hueco, cuya altura total es siempre mayor o igual a la altura del recipiente que soporta. (Adames, Rojas, Heras). Puede presentar todas las formas de los soportes.

“Soporte de una copa u otro tipo de recipiente que tiene el doble de la altura del cuerpo de ésta” (Rojas, 1994: 40)

“Base, generalmente un cono truncado, sólida o hueca, que sostiene un recipiente” (Heras, 1992: 28)

Argüello lo clasifica como base, pero no la describe',
            'glosario_menu_id' => config('glosario.Elementos Que Conforman Una Vasija.Soporte'),
        ]);

        GlosarioContenido::create([
            'contenido'        => '
ASA

Parte que sobresale de la vasija y que se encuentra unida a esta en dos puntos como mínimo; su posición puede ser vertical u horizontal. Su función es facilitar la sujeción de la vasija y ha sido diseñada para que la mano se acomode anatómicamente a su forma. En algunas ocasiones no es funcional y se denomina falsa asa. Esta se describe según su forma y/o ubicación (Heras, 1992: 12)  (Rojas, 1994: 7)  (Argüello, 46). (Strauss, 1973 y Mirambell y Lorenzo, 1983)  (Fenoglio y Rubio, 2004: 107)


Asa de argolla
Asa compuesta por un aro grueso macizo que se une en dos puntos de la vasija.



Asa bifurcada
Asa en forma de aro que se bifurca en el punto de  unión con las paredes de la vasija. (Heras, 1992: 12)


Asa triangular


Asa que tiene forma de triangulo.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      



Asa de rollos


Asa curva que presenta dos o más rollos unidos ente sí. Rojas (1994) 
Asa trenzada


Asa curva en la que la arcilla ha sido torcida o trenzada. 



Asa recta
Asa que describe un ángulo recto y generalmente tiene forma de rectángulo.



Asa de canasta
Asa en forma de arco que se encuentra unida a los bordes opuestos de la vasija. (Echeverria) (Heras, 1992: 12)



Asa de puente
Asa en forma de arco que se encuentra unida a dos o más vertederas de una vasija. También se le denomina vertedera con puente cuando es hueca y permite la comunicación del líquido entre las vertederas. (Heras, 1992: 12)



Asa de puente recto
Asa en forma de línea recta que se encuentra unida a dos o más vertederas de una vasija. También se le puede denominar vertedera de puente recto cuando es hueca y permite la comunicación del líquido entre las vertederas. (Heras, 1992: 12)
Asa de estribo
Asa vertical sobre la vasija, en forma de arco, hueca, con un cuello corto y embocadura por donde se vierte el líquido. (Echeverria) (Heras, 1992: 12)
Asa de tapa
Asa o parte accesoria de una tapa, generalmente colocada en el centro (Echeverria)',
            'glosario_menu_id' => config('glosario.Elementos Que Conforman Una Vasija.Asa'),
        ]);

        GlosarioContenido::create([
            'contenido'        => '
AGARRADERA

Apéndice macizo que sirve para sujetar la vasija u objeto cerámico y que se encuentra unido a la pieza por un solo punto. Se clasifican por sus características formales, si presenta alguna forma reconocible (mamelonar, troncónica, zoomorfa, antropomorfa, en botón). (Rojas, 1994: 6).',
            'glosario_menu_id' => config('glosario.Elementos Que Conforman Una Vasija.Agarradera'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Apéndice de forma alargada, sólido o hueco, que sirve para agarrar la vasija. Es un tipo de agarradera, pues se encuentra adherido a la vasija en un solo punto (mayormente adherida al cuerpo). Su descripción se realiza de acuerdo con la forma geométrica que corresponda. Generalmente es cilíndrico o exhibe  representaciones  antropomorfas, zoomorfas o fitomorfas. (Balfet) (Echeverreria; Rojas, 1994: 34)  (Heras, 1992: 26) (Fenoglio y Rubio, 2004: 107)',
            'glosario_menu_id' => config('glosario.Elementos Que Conforman Una Vasija.Mango'),
        ]);

        GlosarioContenido::create([
            'contenido'        => '
VERTEDERA

Parte acanalada o conducto por el cual se vierten los líquidos. Existen dos tipos de vertederas: abiertas o cerradas.  (Rojas, 1994: 52) (Balfet (et al.,1992: 4  (Fenoglio y Rubio, 2004: 107-108)



Vertedera abierta
Inflexión en el labio, más o menos marcada, que al ensancharse forma un canal abierto por donde se vierte el líquido. (Smith y Piña Chan, 1980) en (Fenoglio y Rubio, 2004: 107-108)


Vertedera cerrrada
Canal cerrado o conducto añadido a la vasija que constituye una abertura diferente de la boca y que permite comunicar el cuerpo de la vasija con el exterior. En algunas ocasiones, la vertedera se convierte en una prolongación de la boca cuando la vasija no presenta abertura en su extremidad superior. Su descripción se realiza siguiendo formas geométricas. (Smith y Piña Chan, 1980) en (Fenoglio y Rubio, 2004: 107-108)',
            'glosario_menu_id' => config('glosario.Elementos Que Conforman Una Vasija.Vertedera'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Pieza que cubre o cierra la boca de una vasija. Su descripción se realiza siguiendo figuras geométricas (circular, elipsoidal, cuadrada, rectangular). Puede presentar un asa o agarradera de diversas formas geométricas o de tipo antropomorfo, zoomorfo, fitomorfo, etc. Una tapa puede corresponder a una vasija determinada o ser un objeto autónomo que sirve para cubrir diferentes vasijas (del mismo material o no).(Balfet) (Echeverria; Rojas, 1994: 47)  (Heras, 1992: 31). 
            
            Pieza que cierra la boca de una vasjia y que se introduce dentro de la zona de vertido, ya sea la boca o el cuelo. (Heras, 1992: 31)  (Balfet)
            ',
            'glosario_menu_id' => config('glosario.Elementos Que Conforman Una Vasija.Tapa Y Tapon'),
        ]);

        GlosarioContenido::create([
            'contenido'        => '
Formas Abiertas
Son recipientes “cuyo diámetro máximo coincide con la boca” (Balfet et al, 1992, p. 4) y no presentan ningún tipo de restricción.
Placa
Vasija baja, abierta y de fondo plano cuya altura no es mayor a un séptimo de su diámetro y que puede carecer de borde, Tambien recibe el nombre de bandeja o fuente (Argüello, sp: 50; Balfet et al, 1992: 5)  (Rojas, 1994: 11)  (Heras, 1992, p. 17) (Prieto, 1987: 19).


Budare
Placa de grandes dimensiones, plano o ligeramente cóncavo. Generalmente, el fondo es delgado y su grosor aumenta hacia las paredes y el borde. Puede presentar asas laterales o mango. Se utiliza para tostar distintos tipos de semillas o masas de yuca, maíz, etc. En otros países se lo denomina comal, cayana, chayana, burén. (Balfet et al, 1992, p. 5)  (Heras, 1992: 17)  (Fenoglio y Rubio, 2004: 101)




Plato
Vasija abierta, con paredes fuertemente divergentes, cuya altura es menor que un tercio de su diámetro pero mayor que un séptimo de éste (Argüello, 50). Puede o no presentar soporte. Se clasifica de acuerdo con la forma geométrica del cuerpo. (Balfet et al, 1992: 5)  (Fenoglio y Rubio, 2004: 103)  (Heras, 1992: 29) (Echeverri; Rojas, 1994: 41). (Prieto, 1987: 20).




Sartén
Vasija con las mismas proporciones del plato que presenta mango o asas. (Balfet et al, 1992, p. 5)




Cuenco
Vasija abierta con paredes divergentes, cuya altura es mayor que un tercio de su diámetro pero no menor que éste (Argüello, sp; 50). La forma del cuerpo es simple, por ende, no tiene cuello, pero puede presentar una leve constricción a la altura de la boca, donde el diámetro de ésta no debe ser menor a las cuatro quintas partes del diámetro máximo (Balfet et al, 1992: 7; Heras, 1992: 18). Puede presentar soporte. A esta forma general tambein se le conoce como cajete o escudilla auqnue algunos autores prefieren separar los cuencos de las escudillas, sin embargo, en este glosario se realiza siguiendo las denominaciones locales más comunes. (Balfet et al, 1992, p. 7) (Heras, 1992, p. 18) (Rojas, 1994: 15) Argüello, 50). (Fenoglio y Rubio, 2004: 100)  (Prieto, 1987, p. 19).





Cazuela
Vasija con las mismas proporciones de los cuencos, puede ser un poco más hondo,  y que presenta asas o mango. (Balfet et al, 1992: 7)(Argüello, 71) (Fenoglio y Rubio, 2004: 100)


Vaso
Vasija abierta cuya altura es mayor que el diámetro de la boca, sus paredes pueden ser verticales o levemente divergentes y de manera general es de base plana. Algunas veces, pero de manera escasa, puede presentar soportes.  (Argüello, sp: 72). (Balfet et al, 1992, p. 10)  (Heras, 1992, p. 33) (Rojas, 1994: 52) (Fenoglio y Rubio, 2004: 104) Prieto, 1987, p. 20).




Taza
Vasija con las mismas proporciones del vaso que presenta asa. (Balfet et al, 1992, p. 10; Heras, 1992, p. 31)


Copa


Vasija de forma compuesta, integrada por un recipiente de boca abierta soportado sobre un pedestal, que funciona como agarradera. La altura del pedestal o soporte debe ser mayor a la mitad de la altura del cuerpo del recipiente o como mínimo permitir que una mano lo pueda agarrar, para cumplir su función. (Argüello, 70)  (Fenoglio y Rubio, 2004: 101) (Heras, 1992, p. 17) (Rojas, 1994: 15)




Caja
Vasija de forma cuadrada o rectangular, con o sin las esquinas redondeadas. Pueden presentar tapa, soportes y/o divisiones internas.  (Fenoglio y Rubio, 2004: 100) (Heras, 1992: 15)




Cucharón
Recipiente compuesto por un cuenco pequeño al que se le adhiere un mango largo y que es comunimente usada para servir alimentos . (Balfet et al, 1992: 8) (Fenoglio y Rubio, 2004: 101)',
            'glosario_menu_id' => config('glosario.Formas.Placa'),
        ]);

        GlosarioContenido::create([
            'contenido'        => '
Formas Cerradas

Recipiente con o sin cuello, cuyo diámetro superior es inferior al diámetro máximo de la vasija. Un recipiente se mantiene en esta categoría aun si por encima del diámetro mínimo la parte superior de la vasija es ampliamente divergente. (Balfet et al, 1992, p. 4) revisar esta definicion con la neuva ersion del manual 
Olla
Vasija que presenta constricción a la altura de la boca, cuyo diametro mínimo es menor a cuatro quintas partes del diámetro máximo del cuerpo. Generalmente la altura es igual a una y hasta dos veces el diámetro de la boca, pero se incluye también en esta categoría las ollas que tienen una altura inferior. Puede o no tener cuello corto, definido como tal cuando la altura de éste es menor o igual a un cuarto de la altura total del cuerpo de la vasija. Pueden presentar perfil simple o compuesto y, dentro de los perfiles compuestos éstos pueden ser flexionados o aristados.Puede presentar asas, agarraderas y/o soportes. (Argüello, 71)  (Balfet et al, 1992, p. 10) (Heras, 1992, p. 17)  (Fenoglio y Rubio, 2004: 103)




Tecomate
Vasija sin cuello, que presenta gran constricción a la altura de la boca, cuyo diametro mínimo es igual o menor a una quinta parte del diámetro máximo del cuerpo. Generalmente la altura es igual a una y hasta dos veces el diámetro de la boca. No presenta perfiles flexionados o aristados (compuestos) ni tampoco cuello o soportes . (Argüello, 72)  (Fenoglio y Rubio, 2004: 104)




Mocasín
Vasija asimétrica con cuerpo alargado que se asemeja a la forma de un pie, una bota o un zapato. El diámetro de la boca es menor que el tamaño total del cuerpo. Puede o no presentar asa. (Heras, 1992, p. 14-15) (Argüello, 71)




Alcarraza
Vasija cerrada con dos vertederas unidas por un asa de puente o vertedera de puente.(Rojas, 1994: 7) (Argüello, 69)




Jarra
Vasija de cuerpo esferico, con cuello recto y asa vertical, cuya altura total está comprendida entre dos y tres veces el diámetro de la boca. La altura del cuello es igual o menor a un cuarto de la altura total del cuerpo. (Balfet et al, 1992, p. 11) (Heras, 1992, p. 25)
 (Rojas, 1994: 30) (Argüello, 50)  (Prieto, 1987, p. 19).




Múcura
Vasija con proporciones similares a una jarra, con cuello más estrecho y alto. El asa vertical es hueca y une el cuerpo con el cuello. Su altura total es entre tres y cuatro veces el diámetro de su boca. La altura del cuello es mayor a uno o dos cuartos de la altura total del cuerpo.  (Rojas, 1994: 35)  (Argüello, 71)




Cántaro
Vasija de boca angosta, cuerpo ancho, base estrecha y cuello corto. Por lo genral presenta dos asas y es comunmente usada para almacenar o acaerrear agua.  (Heras, 1992, p. 15)  (Rojas, 1994: 14) (Argüello, 70)




Ánfora
Vasija de base prolongada en forma de cono y cuello alargado que puede tener la misma altura que el cuerpo. (Heras, 1992: 11)  (Rojas, 1994: 7) (Argüello, 69)  (Balfet, et al., 1992)




Botella
Vasija cerrada sin asas, con mayor desarrollo de la altura que del ancho, cuya altura total es igual o superior a cuatro veces el diámetro superior. Presenta cuello largo y estrecho, cuya altura es mayor a dos o tres cuartos de la altura total del cuerpo. (Balfet et al, 1992, p. 11). (Heras, 1992, p. 14)  (Argüello, 70)


Botellón
Botella con cuerpo globular, cuello largo y angosto. (Balfet et al, 1992, p. 12; Heras, 1992, p. 14)


Aríbalo


Vasija de cuello alto, recto y evertido, cuerpo de sección ovoide, base cónica, asas falsas bajo el labio y dos asas verticales en el cuerpo y una prominencia (clavija de aríbalo) en el hombro como elemento decorativo y funcional. Puede carecer de alguno de estos elementos típicos (Echeverria, Rojas, Heras)





Barril
Vasija de cuerpo cilíndrico o elipsoidal dispuesto horizontalmente, cuyo diámetro de boca y base es similar. (Rojas, 1994: 11)  (Argüello, 71).  (Heras, 1992: 13)',
            'glosario_menu_id' => config('glosario.Formas.Alcarraza'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Vasija abierta de tamaño mediano o grande y sin asas útiles. Puede tener varias formas por lo general presenta tapa. Las urnas funerarias fueron empleadas para depositar restos humanos (huesos o cenizas, bien como receptora de inhumaciones, generalmente secundarias. (Argüello, 72; Heras, 1992, p. 32; Rojas, 1994: 49)',
            'glosario_menu_id' => config('glosario.Forma/Función.Urna'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Recipiente para guardar la cal usada para la masticación de coca. Usualmente, son esféricos con cuello delgado. Puede ser metálico (oro), de cerámica o vegetal (calabazo). (Echeverria; Rojas)',
            'glosario_menu_id' => config('glosario.Forma/Función.Poporo'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Figuras antropomorfas, esquematizada y maciza, más altas que anchas o con forma de tabla, que se observan en la región del Cauca Medio. Rojas, 1994: 16).',
            'glosario_menu_id' => config('glosario.Forma/Función.Retablo'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Pieza cerámica que consiste en una representación antropomorfa o zoomorfa, hecha de barro u otros materiales. Puede ser tanto maciza o hueca. La manufactura puede deberse a un modelado, moldeado o realizada mediante aplicación. (Rojas, 1994: 22) (Heras, 1992, p. 23) (Rojas, 1994: 56)',
            'glosario_menu_id' => config('glosario.Forma/Función.Figurilla'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Instrumento plano o cóncavo con dibujos en bajo o alto relieve usados para estampar. Pueden presentar mango o algún tipo apéndice para sostenerlos (Heras, 1992, p. 30-31; (Rojas, 1994: 44).',
            'glosario_menu_id' => config('glosario.Forma/Función.Sello'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Instrumento de forma cilíndrica, maciso o hueco que presenta diseños geométricos o abstractosy que sirve para estampar, en tela, cerámica o en el cuerpo mediante su rotación.  Echeverria; Rojas, 1994: 43).',
            'glosario_menu_id' => config('glosario.Forma/Función.Rodillo O Pintadera'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Objeto cerámico de diversas formas elaborado con el intención de producir sonido. Pueden ser ocarinas, flautas, silbatos, sonajeros (Echeverria; Rojas, 1994: 29)',
            'glosario_menu_id' => config('glosario.Forma/Función.Instrumento Musical (Sonaja)'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Instrumento musical que produce sonido mediante la vibración de aire, por ejemplo: ocarinas, flautas, silbatos, etc. (Echeverria)',
            'glosario_menu_id' => config('glosario.Forma/Función.Instrumento Musical (Aerófono)'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Instrumento musical que consiste en un objeto hueco al cual se introducen bolitas de barro o piedrecillas que producen sonido al chocar con las paredes del objeto. (Echeverria; Heras, 1992, p. 31)',
            'glosario_menu_id' => config('glosario.Forma/Función.Instrumento Musical (Sonaja)'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Artefacto perforado en el centro, que se coloca en el huso para facilitar su movimiento rotatorio que, a su vez, permite torcer los hilos, además, sirviendo para que el ovillo no se salga. Hay diferentes formas de cuerpo, como disco, cono truncado, cilindro, peso o fragmento amorfo. Suelen estar decorados, algunos de ellos profusamente. También se los denomina tortero. (Echeverria, Heras, Rojas)',
            'glosario_menu_id' => config('glosario.Forma/Función.Volante De Huso'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Utensilio en forma de placa, plato o cuenco, con incisiones profundas, punteado o incrustaciones de piedrecillas, conchas, u otros, principalmente en el fondo de la vasija y en la parte inferior del cuerpo. Sirvió para desmenuzar vegetales, semillas y tubérculos al fin de obtener principalmente harinas.  (Echeverria; Heras, 1992, p. 29)',
            'glosario_menu_id' => config('glosario.Forma/Función.Rallador'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Vasija horadado [perforado] con variedad de formas abiertas o cerradas, con una gran cantidad de agujeros en la parte inferior del cuerpo y fondo, permitiendo el filtraje y tamizado de materiales, alimentos, líquidos, etc. (Balfet et al, 1992, p. 11; Heras, 1992, p. 16; Rojas)',
            'glosario_menu_id' => config('glosario.Forma/Función.Colador'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Copia a pequeña escala de distinats fomras ceramicas, pueden ser: ollas, urnas, copas, etc',
            'glosario_menu_id' => config('glosario.Forma/Función.Miniatura'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Pieza pequeña de cerámica con perforacion, que forma parte de un collar o brazalete. Puede ser globular, rectangular, discoidal, cilíndrica, bi-cónica, cuadrada, ovoide, etc. Algunas cuentas tienen decoración con diseños geométricos incisos e impresos. (Heras, 1992, p. 19; ” (Rojas, 1994: 15)',
            'glosario_menu_id' => config('glosario.Forma/Función.Cuenta'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Vasija cerrada similar a una alcarraza, generalmente de cuerpo doble comunicante, que tiene un sistema de paso que al permitir la salida del aire o de líquidos emite un sonido bien de silbato, bien de imitación del silbido de un animal. Generalmente, presenta vertedera de puente, estrecha y alargada, cerca de la cual, existe un pequeño orificio que sirve de desembocadura a una pequena caja de resonancia (puede haber varias cajas de resonancia en una sola botella). La caja (o cajas) de resonancia suele estar alojada dentro de la cabeza de la figura o, si ia pieza es pequeña, dentro de su cuerpo. (Echeverria; Heras, 1992: 14; Rojas, 1994: 52)',
            'glosario_menu_id' => config('glosario.Forma/Función.Botella Silbato'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Vasija de gran tamaño, de acabado burdo y paredes gruesas, usada para la cocción y procesamiento de la sal. Para obtener la sal, se hervía en ésta el agua-sal, con el fin de deshidratarla y así obtener “panes de sal”. (Rojas, 1994: 27)  (Argüello, 71)',
            'glosario_menu_id' => config('glosario.Forma/Función.Gacha'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Vasija abierta que presenta perforaciones en parte de la base y en las paredes del cuerpo, utilizado para quemar o sahumar escencias, hierbas o cualquier otra sustancia aromática. Pueden presentar agarradera tipo mango y en algunos casos tienen soportes. Se ocnoce tambien como sahumador   (Rojas, 1994: 29) (Echeverria) (Fenoglio y Rubio, 2004: 103)  (Heras, 1992: 24)',
            'glosario_menu_id' => config('glosario.Forma/Función.Incensario'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Representación antropomorfa, zoomorfa o antropozoomorfa, utilizada para cubrir el rostro humano y/o cabeza.  Está hecha en cerámica, madera, píedra, concha, metal, obsidiana, etc., la cual se modela imitando el original, esquematizándolo. (Echeverria; Rojas)',
            'glosario_menu_id' => config('glosario.Forma/Función.Máscara'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Acción de emparejar o igualar la superficie de una vasija cerámica, total o parcialmente, cuando la arcilla aún está húmeda o mientras inicia el proceso de secado. Esta técnica permite obtener un acabado mate y una superficie homogénea, sin rugosidades ni desgrasante sobresaliendo. Los instrumentos que se utilizan son: manos húmedas, trapos, madera, fibras, hojas, cáscara de vegetales o piedras pequeñas. Los instrumentos duros se emplean para eliminar las imperfecciones y los suaves para emparejar o suavizar la superficie. (Balfet et al, 1992; Echeverria; Fenoglio y Rubio).',
            'glosario_menu_id' => config('glosario.Acabado De La Superficie.Alisado'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Acción de alisar la superficie de una pieza cerámica por frotamientos repetitivos realizados al final del proceso de secado o después de la cocción. Esta técnica permite obtener una superficie lustrosa a la vista y suave al tacto, ya que permite alinear y ordenar las partículas. El pulido se diferencia del bruñido porque el lustre es de menor intensidad, es irregular, y, en algunos casos, no cubre por completo la superficie de la vasija por lo cual se pueden distinguir zonas con brillo y zonas mate. Los instrumentos empleados son objetos duros y sin punta, como canto rodado, madera, hueso, cuero, perlas, pedazos de cerámica, concha. Generalmente el trabajo y los instrumentos utilizados dejan huellas características sobre la superficie (estrías, franjas, etc.). (Echeverria) (Fenoglio y Rubio)  (Balfet et al, 1992)',
            'glosario_menu_id' => config('glosario.Acabado De La Superficie.Pulido'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Acción de pulimento intenso y uniforme cuando la pasta está casi seca. Esta técnica permite obtener una superficie muy brillante a la vista y sedosa al tacto. A diferencia del pulido, en el bruñido, primero se utilizan objetos duros para obtener una superficie homogénea y un lustre similar al pulido y segundo, se emplean objetos suaves, como tela o cuero, para obtener el brillo final por frotamiento.  (Argüello)  (Smith y Piña Chan, 1962: 6). (Echeverria)  (Fenoglio y Rubio)',
            'glosario_menu_id' => config('glosario.Acabado De La Superficie.Bruñido'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Acción de raspar o raer parte de la superficie de una vasija cuando está casi seca. Esta técnica consigue un aspecto granuloso o rugoso, al emplear instrumentos afilados. Se puede igualmente efectuar esta operación sobre una superficie alisada o pulida, con el propósito de obtener un efecto de contraste. (Balfet et al, 1992; Echeverria)',
            'glosario_menu_id' => config('glosario.Acabado De La Superficie.Raspado'),

        ]);

        GlosarioContenido::create([
            'contenido'        => 'Es una suspensión de barro en agua, que se utiliza para recubrir la superficie de un objeto cerámico con una capa de un color diferente a la pasta de la cerámica, que se aplica antes de la cocción, total o parcialmente, sobre la superficie. Existen tres formas para aplicar el engobe: inmersión, vertido y aplicación. 
La inmersión consiste en sumergir la vasija, ya sea completa o una parte de ésta, dentro de un contenedor con el engobe. Esta técnica produce un recubrimiento más homogéneo que los otros métodos, en cuanto a grosor y esparcimiento del engobe. Este método rellena todos los huecos, imperfecciones e irregularidades de la superficie. Cuando sólo se recubre una parte quedará una línea divisoria entre la ausencia de entre la porción cubierta y la que no lo está. 
El vertido consiste en vaciar el engobe sobre la pieza, por lo que requiere de un contenedor. La desventaja de este método es que se tiene poco control sobre el recubrimiento, por lo que, se suele emplear para vasijas muy grandes que no se pueden sumergir dentro de un contenedor o para cubrir el interior de las piezas. Para lograr un revestimiento satisfactorio es necesario rotar la vasija durante el vaciado, lo que producirá una serie de arcos o estrías producto del movimiento del engobe sobre la pieza, por lo tanto la superficie no será homogénea. 
Por último, la frotación se basa en esparcir el engobe por medio de un material esponjoso (esponja, tela, trapo, piel de animal, bolas de paja o pasto) sobre la superficie. La desventaja principal de esta técnica es que deja estrías o marcas del material utilizado además de que los márgenes suelen quedar irregulares. (Argüello; Balfet et al; Fenoglio y Rubio).',
            'glosario_menu_id' => config('glosario.Acabado De La Superficie.Engobe'),
        ]);

        GlosarioContenido::create([
            'contenido'        => '
Decoración que no altera el volumen de la superficie
Se trata de diversos tipos de diseños que forman parte de la decoración de una pieza  que no modifican su volumen 
Incisión
Técnica que consiste en entallar la arcilla cruda, cuando la vasija se encuentra un poco seca y ha perdido plasticidad. En la incisión se retira una pequeña cantidad de arcilla ya sea cortando, raspando o haciendo surcos poco profundos, para trazar diseños en la superficie de la vasija. La incisión se puede efectuar con una diversidad de instrumentos que van desde un pequeño palo de madera hasta punzones o peines hechos específicamente para esta tarea. Los criterios para su identificación son: 1) como la decoración se realiza antes de la cocción se puede observar que el color de la incisión es igual al resto de la superficie, 2) trazado lineal que suele presentar exceso de material o rebaba, ya sea, al final o a los extremos de los surcos, 3) los motivos incisos repetidos nunca son idénticos, 4) la línea de trazado varía de acuerdo con la curva de la vasija, 5) se pueden identificar las distintas marcas que deja el instrumento utilizado.  (Balfet et al, 1992) (Fenoglio y Rubio) Echeverria)


Excisión
Técnica que consiste en excavar o retirar parte de la superficie de una vasija en estado plástico, para obtener un diseño plano contrastado o relieve. Una característica principal de ésta es que nunca atraviesa por completo las paredes de la vasija, solamente se rebaja el grosor en zonas particulares. El efecto final es bajo o de relieve, ya que algunas partes son más profundas que otras. La excisión se realiza con un instrumento cortante; cuando se procede a la excisión por extracción de arcilla se usa preferentemente un instrumento con una extremidad cortante omo navajillas, cuchillos, punzones, y demás que permitan cortar limpiamente el área deseada. Los criterios para su identificación dependen de la forma como se realiza la excisión. Si se realizó por medio de corte directo, entonces se podrán observar las huellas de intersección en los puntos de unión del corte. Si se realizó por extracción directa entonces el fondo de la zona extraída se verá homogénea y, probablemente, se podrán identificar las huellas del instrumento empleado. Si, por último, se realizó en dos momentos, es decir, trazo y extracción, entonces se notarán las zonas trazadas por la presencia de rebabas y poca uniformidad en los bordes. (Balfet et al, 1992) (Echeverria)


Calado
Técnica similar a la excisión, que consiste en formar diseños mediante cortes que atraviesan por completo de la pared de la vasija. Puede ser decorativo y/o funcional. Los instrumentos empleados, probablemente, fueron los mismos que en la excisión, simplemente los cortes o extracciones son más profundas. Los criterios de identificación son similares, aunque podemos señalar uno más: generalmente, las perforaciones no tienen el mismo grosor, es decir, que conforme nos acercamos al interior de la vasija puede ir disminuyendo el tamaño de la perforación o corte; no son homogéneas. (Echeverria)  (Fenoglio y Rubio)


Grabado
Técnica que consiste en tallar un instrumento sobre la superficie de la arcilla cocida o completamente seca, produciendo una línea o más en bajo relieve. Las incisiones o dibujos son mas o menos regulares y se reconocen por la existencia de pequeños descascaramientos en la superficie, ya que, al realizarse sobre cerámica cocida, es mucho más complicado grabar la superficie.  (Balfet et al, 1992) (Argüello)  (Echeverria)  (Fenoglio y Rubio)


Hachurado



Diseño decorativo que consiste en rellenar una superficie mediante lineas paralelas entrecruzadas transversalelas u oblicuas.  (Smith y Piña Chan, 1962: 14).” (Echeverria)  (Argüello).




Acanalado
Técnica de decoración que consiste en formar canales o depresiones anchas y continuas, de fondo curvo, con un instrumento o con el dedo sobre la superficie exterior de la vasija, cuando la pasta está aún blanda. Los canales pueden ser horizontales o verticales. Algunas veces los canales son más profundos y anchos, si bien, en ocasiones únicamente se presentan como pequeñas ondulaciones en la superficie. (Fenoglio y Rubio) (Echeverria)


Impresión
Técnica de decoración que resulta al ejercer presión para dejar la marca de un objeto sobre la superficie de la arcilla todavía plástica. Existe una gran diversidad de objetos que se pueden utilizar para este fin, abarcando hasta donde la imaginación y la naturaleza lo permiten, siendo los más comunes textiles, cuerdas, fibras, cestas, dedos, uña, concha, tusa de la mazorca, etc. Podemos clasificar tres modos de ejercer presión con un instrumento sobre la superficie: 1) Estampado o impresión simple, 2) Impresión con rodillo, 3) Impresión de mecedora. El criterio de identificación varía de acuerdo con el objeto utilizado, sin embargo, con esta técnica puede haber cierto grado de desplazamiento del barro, hay nitidez en el motivo y es posible identificar la huella de un objeto conocido o reconstruir su forma (textiles, uña, etc) (Balfet et al, 1992; Echeverria; Fenoglio y Rubio). 


Imprensión con dedo
Técnica que consiste en oprimir contra la superficie las yemas de los dedos, una vez terminada la pieza, pero aún fresco el barro, para dejar impresa las huellas de éstos sobre la superficie de la vasija. Puede presentarse de dos formas, ya sean marcas profundas o, únicamente, las huellas dactilares. (Fenoglio y Rubio)




Ungulación
Técnica que consiste en oprimir la uña contra la superficie de la pasta aún plástica, una vez finalizada la pieza. La impresión con uña deja una marca curvilínea muy característica. (Echeverria)


Impresión con sello
Técnica que consiste en presionar sobre la superficie aún plástica el sello para imprimir los motivos decorativos en él presentes. Por lo tanto, este tipo de decoración implica la fabricación previa del instrumento y del diseño necesarios para llevarla a cabo (ver Sello). En el caso de utilización repetida de un mismo sello, los motivos obtenidos son rigurosamente idénticos, incluso se repiten los defectos que pueden facilitar la identificación del procedimiento utilizado. (Echeverria)  (Fenoglio y Rubio)


Impresión por rotación



Técnica que consiste en apretar un instrumento de forma cilíndrica y de hacerlo rodar sobre sí mismo, desplazándolo por la superficie de la pasta todavía plástica y dejando en su marca o huella en bandas sucesivas. Un criterio de identificación específico es la presencia de una banda continua del ancho del instrumento utilizado; en los casos más favorables, el perímetro de dicho instrumento puede determinarse gracias a la repetición de un detalle.  (Echeverria)  (Balfet et al, 1992)


Impresión de mecedora
Técnica que consiste en apretar, perpendicular u oblicuamente, un instrumento sobre la superficie aún plática, realizando un movimiento de balancín dejando su marca o huella, es decir, moviéndolo de un lado a otro de su centro de equilibrio. Si el movimiento es continuo, la impresión será en ángulos de segmentos rectos o curvilíneos (zigzag) y si el movimiento es discontinuo, los motivos serán separados dispuestos en línea o cubriendo una superficie. Un criterio de identificación específico es la profundidad desigual de la huella, más profunda en el centro que en las extremidades; a veces se pueden reconocer claramente los extremos, inicial y terminal (del movimiento de báscula), este último indicado por una leve rebaba. (Echeverria) (Balfet et al, 1992)


Decoración pintada:
Pintura positiva y Pintura negativa
Técnica que consiste en aplicar, total o parcialmente, un material colorante (diferente a la arcilla) sobre la superficie de un objeto de cerámica, antes de la cocción aunque también se presenta después de la cocción. En la pintura precocción se utilizan soluciones de colores minerales, así la pintura, al ser sometida a la cocción, se funde y adhiere perfectamente a la superficie de la vasija, por lo que no se pierde ni elimina y tiene brillo. En la pintura poscocción se emplean revestimentos de origen orgánico o mineral, que simplemente se deja secar y, como no se vuelve a cocer, se desprende fácilmente y se verá mate. La decoración con pintura puede ser positiva si directamente se ejecuta la figura por medio de la aplicación de colorante, o negativa donde la figura o diseño resultante se logra aplicando colorante y dejando espacios vacíos que son los que finalmente forman el diseño. A su vez, puede ser monocroma, bicroma o policroma. La monocroma es cuando solamente se aplica un color, bicroma cuando se ocupan dos colores y policroma cuando se emplean más de dos colores. (Argüello; Balfet et al; Fenoglio y Rubio).


Baño


Adición de una capa delgada de la misma arcilla diluida en agua usada, que se aplica a toda la superficie de la vasija con fines decorativos mediante inmersión o impregnación de la pieza. Esta acción se ejecuta normalmente antes de la cocción y no se diferencia del color de la pasta. (Rojas)  (Echeverria) (Argüello)




Ahumado
Técnica de decoración o acabado en el color de la pieza, que consiste en introducir negro de humno en la superficie de la arcilla después de la cocción o al final de esta. Más o menos visible en profundidad; la penetración de esta operación, que se manifiesta por el color negro, puede apreciarse en la fractura. (Balfet et al, 1992)  (Echeverria)


',
            'glosario_menu_id' => config('glosario.Decoración.Acanalado'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Decoración que altera el volumen de la superficie
Se trata de diversos tipos de diseños que forman parte de la decoración de una pieza  y que modifican su volumen.
Modelado
Técnica de decoración que consiste en modificar directamente la superficie de la vasija, generando un relieve. La alteración de la superficie se realiza con las manos por medio del desplazamiento de la arcilla plástica. En el modelado no se requiere de la adhesión de barro, es decir, el artesano trabaja y modela sobre el ya existente, por lo cual, puede afectar el espesor total de la pared o solamente la superficie en puntos específicos. Los criterios de identificación son: decoración en hueco o en relieve; huellas digitales frecuentes y motivos repetidos desiguales. (Balfet et al, 1992)  (Fenoglio y Rubio)


Moldeado
Técnica que consiste en decorar una vasija durante el proceso de fabricación, por medio de un molde con decoración hueco o en relieve. Se utilizan moldes de diversos tipos: Molde cóncavo, que se utiliza para fabricar recipientes abiertos o con una parte superior no decorada; Molde bivalvo, unido a la altura del diámetro máximo; Molde bivalvo, unido verticalmente. Los criterios de decoración son: decoración en relieve, nitidez de la decoración; Motivos idénticos cuando éstos se repiten.(Balfet et al, 1992)  (Estrada, 1961; 1 C.N.A., 1964; Childe .1973; Rye. 1981) (Echeverria)


Aplicación de elementos - pastillaje  (modelado o modelado) 
Técnica que consiste en fijar, generalmente antes de la cocción, un elemento modelado. Dichos elementos se adhieren a la superficie de la vasija presionándolos levemente y por medio de la unión de las orillas. Un elemento se considera modelado cuando se modifica de una porción de arcilla por medio de presión con los dedos o la mano. Es importante aclarar que, en algunos casos, los elementos decorativos modelados pueden presentar decoraciones realizadas con otro tipo de técnicas (incisiones, excisiones, impresión, etc) (Balfet et al, 1992)  (Fenoglio y Rubio).',
            'glosario_menu_id' => config('glosario.Decoración.Ahumado'),
        ]);

        GlosarioContenido::create([
            'contenido'        => '“Distancia vertical entre la base y la cúspide de una pieza o elemento” (Heras, 1992: 11)
            
            “Diferencia de proporción entre las dos partes componentes de una pieza a partir del eje” (Rojas, 1994: 8)
            
            “Representación humana en las piezas cerámicas, donde se puede dar el realismo, la esquematización o la estilización de la forma” (Rojas, 1994: 7)
            
            “Figura que tiene forma circular como el disco” (Rojas, 1994: 21)
            
            “Se considera así una pieza cuando su función es ser complementaria de otra, como la tapa de una vasija” (Rojas, 1994: 22)
            
            “Vasija o motivo decorativo, que tiene representación de formas vegetales” (Rojas, 1994: 23)
            
            “Son los códigos geométricos que definen la silueta de un recipiente o de una figura” (Rojas, 1994: 24)
            
            “De acuerdo con la categorìa de recipiente, instrumento, objeto o elemento, se define el uso que la pieza pudo tener, ceremonial, doméstico, musical” (Rojas, 1994: 24)
            
            “Especificación de la función, teniendo en cuenta el contexto mortuorio en que fue hallada la cerámica” (Rojas, 1994: 24)
            
            “Parecido, en la forma, a la semilla de la lenteja, es decir, compuesto de dos casquetes semiesféricos” (Rojas, 1994: 32)
            
            “Recipientes y soportes con representación de mamas” (Rojas, 1994: 34)
            
            “Sìmbolo o representación del órgano viril en la cerámica” (Rojas, 1994: 24)
            
            “Figura en forma de óvalo” (Rojas, 1994: 38)
            
            Agujerear una pieza atravesándola de lado a lado. Puede realizarse con fines decorativos como en el calado o funcionales, como en las agarraderas de suspensión; o pueden ser orificios en las figuras cerradas para el paso del aire en la cocción” (Rojas, 1994: 40)
            
            “Utensilio para contener sustancias líquidas o sólidas” (Rojas, 1994: 43)
            
            “Se describen aquí las caras zoomorfas o antropomorfas con los rasgos más característicos: ojos, boca, nariz, orejas, pómulos, frente, pestañas, hocico, trompa” (Rojas, 1994: 43)
            
            “Se define en las figuras antropomorfas o zoomorfas como femenino, masculino, no visible o indeterminado” (Rojas, 1994: 44)
            
SILUETA
“Perfil máximo (contorno de una pieza cerámica); se presenta simple o compuesta” (Rojas, 1994: 44).
Silueta simple

Silueta compuesta

Punto de ruptura de una curva que provoca un cambio brusco del contorno formando un ángulo saliente o entrante” (Balfet, et al., 1992: 36).
            
            “Denominación común para algunos recipientes cuando no se puede definir su función” (Rojas, 1994: 52)
“Término genérico con el que se designa a cualquier recipiente de barro cocida (cerámica)” (Heras, 1992: 33)

“En las figuras antropomorfas y zoomorfas el cuerpo puede ser hueco, macizo o tabloide. Y la posición sedente o pedestre” (Rojas, 1994: 16)
            
            En las figuras se describen los rasgos características de éstas. Se tiene en cuenta la deformación craneana y si la cabeza es alargada, achatada, abstracta, esquematizada, cuadrada, realista” (Rojas, 1994: 14)',
            'glosario_menu_id' => config('glosario.Términos Complementarios.General'),
        ]);

        GlosarioContenido::create([
            'contenido'        => 'Balfet, Hélène; Fauvet, Marie-France; Monzón, Susana. 1992. Normas para descripción de cerámicas. Centro de estudios mexicanos y centroamericanos.
Contreras Cortés, F. 1984. Clasificación y tipología en arqueología. El camino hacia la cuantificación. Cuadernos De Prehistoria Y Arqueología De La Universidad De Granada, 9, 327-385. Consultado de http://revistaseug.ugr.es/index.php/cpag/article/view/1240/1430
Echeverría Almeida, José. 2011. Glosario de Arqueología y temas afines. Instituto nacional de patrimonio cultural. Quito.
Fournier, Robert. 1981. Diccionario ilustrado de alfarería práctica. Ediciones Omega, S.A. Casanova. Barcelona
Heras, César M. 1992. Glosario terminológico para el estudio de las cerámicas arqueológicas. Dpto. Historia de América II. Universidad Computense de Madrid.
Meggers Betty J. y Evans Clifford. 1969. Cómo interpretar el lenguaje de los tiestos. Smithsonian Institution. Washington.
Orton, C., P. Tyers & A. Vince. 1997. La cerámica en arqueología. Barcelona.
Rojas, D., J. Guerrero & H. Ruíz. 1993. Glosario para la documentación cerámica. Fondo de Promoción de la Cultura. Banco Popular, Bogotá.
Shepard, Anna O. 1954. Ceramics for archaeologist. Carnegie Institution of Washington.',
            'glosario_menu_id' => config('glosario.Bibliografía.General'),
        ]);

    }
}
