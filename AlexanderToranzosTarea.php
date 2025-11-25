<?php
echo "Resumen de _Java";
echo "<br>";
echo "sintaxis de java:";
echo "public class NombreClase {
    public static void main(String[] args) {
        // programa o codigo
    }
}";
echo"estructuras repetitivas";
echo "En Java, las estructuras repetitivas (o bucles) permiten ejecutar un bloque de código varias veces de forma automática. Son esenciales cuando necesitas repetir acciones sin escribir código repetido. Los bucles principales son: while, do-while, for y for-each.
El bucle while ejecuta su contenido mientras la condición sea verdadera. La condición se evalúa antes de entrar al bucle, por lo tanto, puede no ejecutarse nunca. Se usa cuando no sabes cuántas repeticiones habrá, pero la condición lo controla.
Ejemplo:
while (condición) { ... }

El bucle do-while funciona igual que while, pero su característica principal es que siempre se ejecuta al menos una vez, ya que la condición se evalúa al final. Es útil cuando necesitas que el código se ejecute una vez antes de decidir si se repite.
Ejemplo:
do { ... } while (condición);

El bucle for tradicional se utiliza cuando sabes de antemano cuántas veces quieres repetir algo. Tiene tres partes: inicialización, condición y actualización del contador. Es el bucle más común cuando se trabaja con números o posiciones.
Ejemplo:
for (int i = 0; i < n; i++) { ... }

El bucle for-each (o enhanced for) se usa para recorrer elementos de un arreglo o colección sin manejar índices manualmente. Es más simple pero no permite modificar el índice ni recorrer hacia atrás.
Ejemplo:
for (Tipo elemento : colección) { ... }

Dentro de los bucles se pueden usar dos palabras clave importantes: break, que detiene completamente el bucle y sale de él, y continue, que salta la iteración actual y pasa a la siguiente. Ambos permiten controlar el flujo dentro del bucle.
Finalmente, es importante evitar los bucles infinitos, que ocurren cuando la condición nunca se vuelve falsa, lo que puede congelar el programa. Para evitarlos, siempre asegúrate de que la condición cambie en algún momento.";

echo " Proframa orientado de objetos (POO, atributos y metodos)";
echo "En Java existen dos pilares fundamentales para crear programas eficientes: las estructuras repetitivas, que permiten ejecutar código varias veces, y la Programación Orientada a Objetos (POO), que organiza el código en clases y objetos con atributos y métodos.
Las estructuras repetitivas permiten repetir un conjunto de instrucciones automáticamente. El bucle while ejecuta su contenido mientras la condición sea verdadera, evaluando la condición antes de entrar, por lo que puede no ejecutarse ninguna vez. El do-while asegura al menos una ejecución porque la condición se evalúa al final del bloque. El for tradicional es ideal cuando se conoce el número exacto de repeticiones, ya que utiliza inicialización, condición y actualización del contador. El for-each sirve para recorrer arreglos o colecciones sin manejar índices manualmente. Además, dentro de los bucles se pueden usar las palabras clave break para salir del bucle y continue para saltar a la siguiente iteración. Es importante evitar los bucles infinitos, que ocurren cuando la condición nunca se vuelve falsa.
Por otro lado, la Programación Orientada a Objetos (POO) organiza el programa en clases y objetos. Una clase es una plantilla que define las características y acciones de los objetos, mientras que un objeto es una instancia real creada a partir de esa clase. Dentro de las clases encontramos atributos, que representan las características de un objeto (como nombre, edad, color), y métodos, que representan sus acciones o comportamientos (como saludar, caminar o sumar). Un método puede recibir parámetros y retornar valores, o simplemente ejecutar una acción.
La POO incluye el principio de encapsulación, que consiste en proteger los atributos usando el modificador private y dando acceso controlado mediante getters y setters, lo que evita cambios no deseados en los datos. Gracias a la POO, el código es más organizado, reutilizable, fácil de mantener y representa mejor objetos del mundo real.";

echo "herencia en java";
echo "En Java, la herencia permite que una clase hija reutilice los atributos y métodos definidos en una clase padre, lo que facilita la reutilización del código y la organización del programa. Para indicar que una clase hereda de otra se utiliza la palabra clave extends, que establece la relación entre la superclase (padre) y la subclase (hija). Una subclase puede modificar el comportamiento de un método heredado mediante la sobrescritura usando la anotación @Override, permitiendo personalizar las acciones según las necesidades de la clase hija. Además, Java proporciona la palabra clave super, que se utiliza para acceder a métodos o atributos de la clase padre, o para llamar al constructor de la superclase cuando es necesario inicializar datos heredados. Gracias a estos mecanismos, la herencia permite crear estructuras más limpias, reutilizables y fáciles de mantener dentro de la Programación Orientada a Objetos.
Sirve:

Reutilizar código: no necesitas volver a escribir lo que ya existe en la clase padre.

Organizar mejor el código: permite crear jerarquías lógicas (por ejemplo, Animal → Perro).

Extender funcionalidades: la subclase puede agregar nuevos métodos o sobrescribir métodos del padre.

Esta la manera de hacer con extends en le codigo java

class Animal {
    void hacerSonido() {
        System.out.println(Sonido genérico...);
    }
}

class Perro extends Animal {
    @Override
    void hacerSonido() {
        System.out.println(Guau guau);
    }
}";

    echo "Archivo sobre crude";
echo "Conexión a la base de datos

Para trabajar con una página web y su base de datos, es fundamental que cada entidad del sistema funcione correctamente y esté conectada. Primero, necesitamos una base de datos existente, ya que sin ella no hay conexión posible. Además, la base de datos debe ser accesible desde la máquina cliente.

Para entornos locales se utiliza XAMPP, que convierte nuestra máquina en un servidor local e incluye:

Apache: servidor web que ejecuta archivos .php y permite que los usuarios accedan a nuestra aplicación.

MySQL: sistema de gestión de bases de datos que permite almacenar y consultar información.

Para establecer la conexión se requieren cuatro parámetros esenciales:

Nombre de la base de datos: debe coincidir exactamente con mayúsculas, minúsculas y caracteres especiales.

Dirección del servidor: normalmente localhost en entornos locales.

Usuario: por defecto root.

Contraseña: por defecto vacía :

Si la conexión falla, se muestra un error; si funciona correctamente, ya podemos ejecutar consultas SQL.

CREATE (Registrar datos)

Se crea un formulario en PHP (formRegistroProducto.php) para recoger datos del usuario.

Un archivo receptor (registroProducto.php) recibe la información con $_POST.

Se establece la conexión a la base de datos con mysqli y se ejecuta la consulta SQL usando query.

Se confirma si el registro fue exitoso o se muestra un error.

READ (Mostrar datos)

Se puede mostrar toda la tabla o un solo elemento.

Para mostrar todos los registros:

Se realiza una consulta SQL y se guarda el resultado en una variable ($resultado).

Se recorre con un bucle while, asignando cada fila a una variable $fila para acceder a sus atributos ($fila[atributo]).

Para mostrar un solo registro:

Se necesita un parámetro, generalmente el id.

Este parámetro se puede enviar mediante GET ($_GET) en la URL.

Se hace una consulta con condición para obtener solo ese registro.

UPDATE (Editar datos)

Para modificar información es necesario identificar qué registro editar, generalmente mediante su id.

Se recupera la información del registro y se muestra en un formulario de edición.

El usuario modifica los datos y se envía el formulario para actualizar la base de datos.

La consulta SQL usada es UPDATE, diferente de INSERT.

Datos sensibles, como id, pueden colocarse en campos ocultos (hidden) para protegerlos.";

?>