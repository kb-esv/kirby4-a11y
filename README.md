# Kirby4 a11y

kirbytags for accessibility

 * WCAG 2.2 SC 3.1.2 - Language of Parts
 * WCAG 2.2 SC 3.1.4 - Abbreviations

## Installation

### Download

Download and copy this repository to `/site/plugins/a11y`.

### Git submodule

```bash
git submodule add https://github.com/kb-esv/kirby4-a11y.git site/plugins/a11y
```

### Composer

```bash
composer require kb-esv/kirby4-a11y
```

## Usage

### Change to a phrase/text in an other language

Examples:

```
In England sagen wir: „(lang: en text: It's raining cats and dogs)“
```

or short

```
In England sagen wir: „(en: It's raining cats and dogs)“
```

Change to a German phrase/text

```
In Germany we say: "(lang: de text: Es regnet wie aus Kübeln)"
```

or short

```
In Germany we say: „(de: Es regnet wie aus Kübeln)“
```

Change to a phrase or a text in an other languages, e.g. french

```
In France the Value Added Tax is called (lang: fr text: Taxe sur la Valeur Ajoutée)
```

Additional attributes:

You can use the following additional attributes:

- lang: RFC 5646 Tag for Identifying Languages
- text: Set the text
- class: Set a class for additional css

### Abbreviations

Examples:

```
(abbr: imho text: In My Humble Opinion)
```

```
(abbr: TVA text: Taxe sur la Valeur Ajoutée lang:fr)
```

```
(abk: Abk. text: Abkürzung)
```

Additional attributes:

You can use the following additional attributes:

- lang: RFC 5646 Tag for Identifying Languages
- text: Set the written out text of the abbreviation
- class: Set a class for additional css

### CSS

The styles can be customized if required, e.g.:

```
abbr[title] {
  cursor: help;
  text-decoration-skip-ink: none;
}
```

## License

MIT
