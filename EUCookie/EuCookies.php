<?php
/**
 * Not inspired for comments today :)
 * 
 * @author Tomislav Horvatiček
 * @version 1.0.0.0
 */
class EuCookies{
	private static $COOKIE_NAME = "cookie_eu_consented";
	
	private static $LEARN_MORE = Array(	"en" => "Learn more", 
										"hr" => "Više.");
										
	private static $MAIN_TEXT = Array(	"en" => "Cookies help us deliver our services. By using our services, you agree to our use of cookies.", 
										"hr" => "Kolači nam omogućavaju bolji rad. Slobodno ih dostavite. :)");
										
	private static $OK_TEXT = Array(	"en" => "OK", 
										"hr" => "U redu.");
	
	public static $lang = "en";
	
	/**
	*	-||-
	*   ----
	*/
	public static function Install($linkUrl = null, $overrideMainText = null, $overrideLearnMoreText = null, $overrideOkText = null){
		if ( !isset($_COOKIE[EuCookies::$COOKIE_NAME]) || $_COOKIE[EuCookies::$COOKIE_NAME] != "true" ){
			
			$hasLink = $linkUrl != null && $linkUrl != "";
			
			$fileName = $hasLink ? "script.html" : "scriptnolink.html";
			
			if (PHP_VERSION_ID < 50000){
				//PHP < 5
				$html = file_get_contents('EUCookies.' . $fileName, true);
			}
			else{
				// PHP >= 5
				$html = file_get_contents('EUCookies.' . $fileName, FILE_USE_INCLUDE_PATH);
			}
			
			if ( $hasLink ){
				$html = str_replace("{learnmore}", strlen($overrideLearnMoreText) == 0 ? EuCookies::$LEARN_MORE[EuCookies::$lang] : $overrideLearnMoreText, $html);
			}
			$html = str_replace("{link}", $linkUrl, $html);
			$html = str_replace("{text}", strlen($overrideMainText) == 0 ? EuCookies::$MAIN_TEXT[EuCookies::$lang] : $overrideMainText, $html);
			$html = str_replace("{ok}", strlen($overrideOkText) == 0 ? EuCookies::$OK_TEXT[EuCookies::$lang] : $overrideOkText, $html);
			
			return $html;
		}
		else{
			return "";
		}
	}
}
?>