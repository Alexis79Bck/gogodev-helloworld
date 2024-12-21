<?php

namespace App\Enums;

enum TechStack
{
    case LARAVEL;
    case LIVEWIRE;
    case VUE;
    case GITHUB;
    case DOCKER;

    private function title(): string
    {
        return match ($this) {
            self::LARAVEL => 'Laravel Framework',
            self::LIVEWIRE => 'Laravel Livewire Components',
            self::VUE => 'VUE 3',
            self::GITHUB => 'Git y Github',
            self::DOCKER => 'Docker Containers',
        };
    }

    private function image(): string
    {
        return match ($this) {
            self::LARAVEL => 'laravel.png',
            self::LIVEWIRE => 'livewire.png',
            self::VUE => 'vue.png',
            self::GITHUB => 'github.png',
            self::DOCKER => 'docker.png',
        };
    }

    private function description(): string
    {
        return match ($this) {
            self::LARAVEL => 'Experiencia en el desarrollo con el framework Laravel, utilizando sus características para la creación de aplicaciones web modernas.',
            self::LIVEWIRE => 'Conocimientos básicos en Laravel Livewire para la creación de interfaces de usuario dinámicas y reutilizables.',
            self::VUE => 'Conocimientos fundamentales en el desarrollo de interfaces de usuario interactivas con Vue.js, utilizando componentes y el manejo del DOM virtual.',
            self::GITHUB => 'Manejo de Git y GitHub para el control de versiones y la colaboración en proyectos de desarrollo.',
            self::DOCKER => 'Conocimientos básicos en Docker para la contenerización de aplicaciones y la simplificación del despliegue.'
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
