<?php

namespace App\Enums;

enum Fundamental
{
    case POO;
    case PATTERN_DESIGN;
    case SOLID;
    case CLEAN_CODE;
    case DATABASES;

    private function title(): string
    {
        return match ($this) {
            self::POO => 'POO',
            self::PATTERN_DESIGN => 'Patrones de Diseño',
            self::SOLID => 'SOLID',
            self::CLEAN_CODE => 'Clean Code',
            self::DATABASES => 'Base de Datos',
        };
    }

    private function image(): string
    {
        return match ($this) {
            self::POO => 'poo.jpg',
            self::PATTERN_DESIGN => 'patrones.jpg',
            self::SOLID => 'solid.jpg',
            self::CLEAN_CODE => 'cleancode.jpg',
            self::DATABASES => 'databases.png',
        };
    }

    private function description(): string
    {
        return match ($this) {
            self::POO => 'Sólidos conocimientos en Programación Orientada a Objetos, aplicando principios de encapsulamiento, herencia y polimorfismo.',
            self::PATTERN_DESIGN => 'Aplicación de patrones de diseño comunes para resolver problemas de arquitectura y mejorar la mantenibilidad del código.',
            self::SOLID => 'Comprensión y aplicación de los principios SOLID para crear software robusto, flexible y fácil de mantener.',
            self::CLEAN_CODE => 'Prácticas de código limpio para escribir código legible, mantenible y eficiente, siguiendo estándares de la industria.',
            self::DATABASES => 'Comprensión de los conceptos fundamentales de bases de datos relacionales y no relacionales, incluyendo normalización, ACID y modelado de datos.',
        };
    }

    public function details(): array
    {
        return [
            'title' => $this->title(),
            'image' => $this->image(),
            'description' => $this->description(),
        ];
    }
}
