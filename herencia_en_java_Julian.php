<?php
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