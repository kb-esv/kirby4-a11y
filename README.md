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

Change to an English phrase/text

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

### Additional attributes

You can use the following additional attributes:

- lang: RFC 5646: Tag for Identifying Languages
- text: Set the text
- class: Set a class for css

## License

MIT
