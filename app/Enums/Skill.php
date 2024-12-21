<?php

namespace App\Enums;

enum Skill
{
    case PHP;
    case API_REST;
    case HTML;
    case CSS;
    case MYSQL;

    private function title(): string
    {
        return match ($this) {
            self::PHP => 'PHP',
            self::API_REST => 'API REST',
            self::HTML => 'HTML',
            self::CSS => 'CSS',
            self::MYSQL => 'MySQL/MariaDB',
        };
    }

    private function image(): string
    {
        return match ($this) {
            self::PHP => 'php.png',
            self::API_REST => 'api.png',
            self::HTML => 'html5.png',
            self::CSS => 'css3.png',
            self::MYSQL => 'mysql.png',
        };
    }

    private function description(): string
    {
        return match ($this) {
            self::PHP => 'Lenguaje de scripting del lado del servidor ampliamente utilizado para el desarrollo web. Experiencia en la creación de aplicaciones robustas y escalables.',
            self::API_REST => 'Diseño e implementación de APIs RESTful utilizando principios de arquitectura limpia y mejores prácticas. Manejo de diferentes formatos de datos (JSON, XML).',
            self::HTML => 'Dominio de HTML5 para la estructuración y semántica de páginas web. Creación de interfaces accesibles y optimizadas para SEO.',
            self::CSS => 'Estilizado de interfaces web con CSS3, utilizando metodologías como BEM y Flexbox/Grid para layouts responsivos.',
            self::MYSQL => 'Experiencia en el diseño, implementación y gestión de bases de datos relacionales utilizando MySQL y MariaDB. Consultas SQL, optimización y administración.',
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

