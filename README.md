# Slugify helper for Kohana (supports Cyrillic, Romanian etc.)

### Usage

Slug::ify('Mórë thån wørds') -> "more-than-words";

## CHANGELOG

* 1.1
  Standard Kohana's "URL::title" is used after transliteration
  Default replacement was changed to "-" (the same as replacement in URL::title)
  Small bug fix


* 1.0
  Initial Release
