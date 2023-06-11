# CustomSubtitle
🌻 MediaWiki extension adding a magic function to set custom *SUBTITLE* to any content page. This will be placed under the page title, at the top of the page.


## Usage
In a wikipage, with `/Header` being another existing subpage, use such as :
```
{{#SUBTITLE: Your custom subtitle text goes here. }}
```
or 
```
{{#SUBTITLE:{{/Header}}}}
```

## Structure
  ├── i18n/ : translation files
  |     ├── en.json : English
  |     ├── fr.json : French
  |     └── qqq.json : guides
  ├── src/CustomSubtitleHooks.php :
  └── CustomSubtitle.i18n.php :

## Contribute
- [Phabricator: Lingua-libre](https://phabricator.wikimedia.org/tag/lingua_libre/) — tickets manager
- [Github: Lingua-libre/CustomSubtitle](https://github.com/lingua-libre/CustomSubtitle) — code (PHP,JS)

## Example usage
This module is currently used on :
* [LinguaLibre:Chat_room](https://lingualibre.org/wiki/LinguaLibre:Chat_room)
* [LinguaLibre:Stats](https://lingualibre.org/wiki/LinguaLibre:Stats)
