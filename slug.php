<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Kohana slug helper class.
 *
 * @category   Helpers
 * @version    1.1
 * @author     Andriy Prokopenko <https://github.com/sleepyboy>
 */
class Slug {

	/**
	 * Slugify the given string.
	 *
	 * Usage - Slug::ify('Mórë thån wørds') -> "more-than-words";
	 *
	 * @param 	$string 				String to be slugified.
	 * @param 	$replacement 		Replacement for the spaces.
	 *
	 * @return string
	 *   Filtered value
	 */
	public static function ify($string, $replacement = '-')
	{
		$slug = UTF8::trim(UTF8::strtolower($string));

		$map = array(
			// Cyrillic.
			'/щ/' => 'sch',
			'/ш/' => 'sh',
			'/ч/' => 'ch',
			'/ц/' => 'c',
			'/ю/' => 'yu',
			'/я/' => 'ya',
			'/ж/' => 'zh',
			'/а/' => 'a',
			'/б/' => 'b',
			'/в/' => 'v',
			'/г|ґ/' => 'g',
			'/д/' => 'd',
			'/е/' => 'e',
			'/ё/' => 'yo',
			'/з/' => 'z',
			'/и|і/' => 'i',
			'/й/' => 'y',
			'/к/' => 'k',
			'/л/' => 'l',
			'/м/' => 'm',
			'/н/' => 'n',
			'/о/' => 'o',
			'/п/' => 'p',
			'/р/' => 'r',
			'/с/' => 's',
			'/т/' => 't',
			'/у/' => 'u',
			'/ф/' => 'f',
			'/х/' => 'h',
			'/ы/' => 'y',
			'/э/' => 'e',
			'/є/' => 'ye',
			'/ї/' => 'yi',

			// Other.
			'/º|°/' => 0,
			'/¹/' => 1,
			'/²/' => 2,
			'/³/' => 3,
			'/à|á|å|â|ã|ä|ą|ă|ā|ª/' => 'a',
			'/@/' => 'at',
			'/æ/' => 'ae',
			'/ḃ/' => 'b',
			'/č|ç|¢|ć|ċ|ĉ|©/' => 'c',
			'/ď|ḋ|đ/' => 'd',
			'/€/' => 'euro',
			'/è|é|ê|ě|ẽ|ë|ę|ē|ė|ĕ/' => 'e',
			'/ƒ|ḟ/' => 'f',
			'/ģ|ğ|ĝ|ġ/' => 'g',
			'/ĥ|ħ/' => 'h',
			'/Ì|Í|Î|Ï/' => 'I',
			'/ì|í|î|ï|ĩ|ī|į|ı/' => 'i',
			'/ĵ/' => 'j',
			'/ķ/' => 'k',
			'/ł|ľ|ĺ|ļ/' => 'l',
			'/Ł/' => 'L',
			'/ṁ/' => 'm',
			'/ñ|ń|ņ|ň/' => 'n',
			'/ò|ó|ô|ø|õ|ö|ō|ð|ơ|ő/' => 'o',
			'/œ/' => 'oe',
			'/ṗ/' => 'p',
			'/ř|ŗ|ŕ|®/' => 'r',
			'/š|ś|ṡ|ş|ș/' => 's',
			'/ť|ț|ŧ|ţ|ṫ/' => 't',
			'/þ/' => 'th',
			'/ß/' => 'ss',
			'/™/' => 'tm',
			'/ù|ú|ů|û|ü|ū|ũ|ű|ŭ|ư|ų|µ/' => 'u',
			'/ẃ|ẅ|ẁ|ŵ/' => 'w',
			'/×/' => 'x',
			'/ÿ|ý|ỳ|ŷ|¥/' => 'y',
			'/Ž|Ż|Ź/' => 'Z',
			'/ž|ż|ź/' => 'z',
			'/\\s+/' => $replacement
		);
		$slug = preg_replace(
			array_keys($map),
			array_values($map),
			$slug
		);

		return URL::title($slug, $replacement);
	}
}