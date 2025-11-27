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
?>