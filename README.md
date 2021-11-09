# VoteIt  

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=?style=plastic&logo=laravel&logoColor=white)](#)

[![GitHub commits](https://badgen.net/github/commits/mkdir3/VoteIt/main)](https://github.com/mkdir3/VoteIt/commit/)

## Concept de l'application

L'application doit fournir une plateforme simple afin que ses utilisateurs puissent partager des messages sur les sujets de leurs choix.
Ces messages peuvent être commentés, filtrés et triés.
Une page Administration sera aussi disponible.

> La stack TALL
> Tailwind, Alpine, Livewire, Laravel
> sera utilisée tout au long du projet. 

## Installation

*VoteIt requiert [Node.js](https://nodejs.org/) v12+ pour fonctionner.*

**Installez les dépendances et lancez un serveur.**

```sh
cd VoteIt
npm i
composer i
php artisan serve
```

**Votre serveur sera lancé à cette adresse:**

```sh
127.0.0.1:8000
```



**Si erreur Webpack, dans votre bash :**
```sh
export NODE_OPTIONS=--openssl-legacy-provider
```

## Plugins

- [@tailwindcss/line-clamp] - **Tailwind Line clamp**
- [@tailwindcss/forms] - **Tailwind Forms**
- [@barry-vdh/laravel-debugbar] - **Laravel DebugBar**
- [@cviebrock/eloquent-sluggable] - **Eloquent Sluggable**
- [@livewire/livewire] - **Laravel Livewire**
  
  [@tailwindcss/line-clamp]: <https://github.com/tailwindlabs/tailwindcss-line-clamp>
  [@tailwindcss/forms]: <https://github.com/tailwindlabs/tailwindcss-forms>
  [@barry-vdh/laravel-debugbar]: <https://github.com/barryvdh/laravel-debugbar>
  [@cviebrock/eloquent-sluggable]: <https://github.com/cviebrock/eloquent-sluggable>
  [@livewire/livewire]: <https://github.com/livewire/livewire>

## License

MIT
