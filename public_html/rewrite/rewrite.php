<?php 

namespace App;

// Translate database value to HTML
class dbToHTML{	
// First, $article and $i used as global variable
protected $article = '';
private $i=0;
		
		// Function to replace string in article
		private function replace($replacement, $left, $length){
			global $i;
			global $article;
			$article = substr_replace($article, $replacement, $left, $length);
			return $i+strlen($replacement);
		}

		// Function to generate URL to HTML href
		private function htmlURL($url){
			$html = '<a href="';
			if($url){
				$html = $html.$url.'"';
			}
			$html = $html.'>';

			return $html;
		}

		// Function to add text size to HTML
		private function htmlText($size){
			$html = '<text';
			if($size){
				$html = $html.' style="font-size:'.$size.'"';
			}
			$html = $html.'>';

			return $html;
		}

		// Function to generate HTML paragraph and align
		private function htmlParagraph($align){
			$html = '<p';
			if($align){
				$html = $html.' align="'.$align.'"';
			}
			$html = $html.'>';

			return $html;
		}

		// Function to generate HTML image
		private function htmlImage($imglink, $width, $height){
			return '<img src="'.$imglink.'" width='.$width.' height='.$height.'>' ;
		}

		// Function to generate HTML embedded Youtube
		private function htmlYoutube($ytid, $width, $height){
			return '<iframe width='.$width.' height='.$height.' src="https://www.youtube.com/embed/'.$ytid.'"></iframe>';
		}

		// Function to translate database value to HTML by given tag
		private function changeContent($type, $typee, $k, $closetagpos){
			global $article;
			// Available tags :
			$img ="[IMG";				// Image open tag
			$yt = "[YT";				// Embedded Youtube open tag, only Youtube video ID is used
			$par = "[P";				// Paragraph open tag
			$link = "[URL";				// URL open tag, make sure to write http:// or https:// before the link			
			$text = "[TEXT";			// Text open tag used to set align
			$imge ="[/IMG]";			// Image close tag
			$yte = "[/YT]";				// Embedded Youtube close tag
			$w = "WIDTH";				// Width parameter of image and video, you can set value as percent, em, pixels, or number just as HTML
			$h = "HEIGHT";				// Height parameter of image and video, you can set value as percent, em, pixels, or number just as HTML
			$s = "SIZE";				// Size of text parameter, you can use this as like as HTML
			$a = "ALIGN";				// Align of text parameter, you can set LEFT, RIGHT, CENTER, or JUSTIFY as like as HTML
		
			$width = "40%";				// Default image and video width
			$height = "auto";			// Default image height
			
			if($type == "[YT") $height = "300px;";		// Default video height
			$html = "";									// HTML value

			// Case for image or video content
			if($type == $img ||  $type == $yt){
						$l = strpos($article, $typee, $k);
						$data = substr($article, $closetagpos+1, ($l)-($closetagpos)-1); 
						$wpos = strpos($article, $w, $k);
						$hpos = strpos($article, $h, $k);

						// Get the value for image and video
						if($l){
							if($wpos && $wpos < $closetagpos)
							{	
							$lwvaluepos = strpos($article, "=", $wpos)+1;
							if($wpos < $hpos){
								$rwvaluepos = $hpos-1;
							}
							else{
								$rwvaluepos = $closetagpos-1;
							}
							$width = substr($article, $lwvaluepos, $rwvaluepos-$lwvaluepos+1);
							}
						if($hpos && $hpos < $closetagpos){
							$lhvaluepos = strpos($article, "=", $hpos)+1;
							if($hpos < $wpos){
								$rhvaluepos = $hpos-1;	
							}
							else{
								$rhvaluepos = $closetagpos-1;
							}
							$height = substr($article, $lhvaluepos, $rhvaluepos-$lhvaluepos+1);
						}

						// Get the HTML
						if ($type == "[IMG") {
							$html = $this->htmlImage($data, $width, $height);
						}
						else if($type == "[YT"){
							$html = $this->htmlYoutube($data, $width, $height);
						}
						}
						// Error handler if wrong syntax at close tag
						else{	
							$error = "<br><b>Syntax error!! Unidentified close tag.</b><br>[";
							$k = $this->replace($error, $k, 1);
							return $k;
						}

					$k = $this->replace($html, $k, $l+strlen($typee)-$k);
					}

				// Case for paragraph, align, and URL	
				else if ($type == $par || $type == $text || $type == $link){
					$value = false;

					// Get the value position
					if($type == $par )
					{
						$vpos = strpos($article, $a, $k);
					}
					else if($type == $text)
					{
						$vpos = strpos($article, $s, $k);
					}
					else{
						$vpos = strpos($article, '"', $k)+1;
						$vrpos = strpos($article, '"', $vpos+1)-1;
					}

					// Get the value, then generate HTML 
					if($type == $par || $type == $text){
						if($vpos && $vpos < $closetagpos)
						{	
							$lvaluepos = strpos($article, "=", $vpos)+1;
							$rvaluepos = $closetagpos-1;
							$value = substr($article, $lvaluepos, $rvaluepos-$lvaluepos+1);
						}
	
						if($type == $par )
						{
							$html = $this->htmlParagraph($value);
						}
						else
						{
							$html = $this->htmlText($value);
						}
					}
					else{
						$value = substr($article, $vpos, $vrpos-$vpos+1);
						$html = $this->htmlURL($value);
					}
					
					$k = $this->replace($html, $k, $closetagpos-$k+1);
					}
				else{
					$k = $this->replace($typee, $k, $closetagpos-$k+1);
				}

				return $k;
			}
			


		private function check($j){
			global $article;
			// Supported Tags
			$img ="[IMG";				// Image open tag
			$yt = "[YT";				// Embedded youtube video open tag
			$par = "[P";				// Paragraph open tag
			$bold = "[B]";				// Bold open tag
			$italic = "[I]";			// Italic open tag
			$underline = "[U]";			// Underline open tag
			$bolde = "[/B]";			// Bold close tag
			$italice = "[/I]";			// Italic close tag
			$underlinee = "[/U]";		// Underline close tag
			$text = "[TEXT";			// Text open tag
			$imge ="[/IMG]";			// Image close tag
			$yte = "[/YT]";				// Embedded Youtube video close tag
			$pare = "[/P]";				// Paragraph close tag
			$texte = "[/TEXT]";			// Text close tag
			$link = "[URL";				// URL open tag
			$linke = "[/URL]";			// URL close tag
		
			$k = $j;
			// Get position of end op open tag
			$closetagpos = strpos($article, "]", $k);
			// Case for image open tag
			if($img == substr($article, $k, strlen($img))){
				$k = $this->changeContent($img, $imge, $k, $closetagpos);
			}
			// Case for Youtube open tag
			else if($yt == substr($article, $k, strlen($yt))){
				$k = $this->changeContent($yt, $yte, $k, $closetagpos);
			}
			// Case for paragraph open tag
			else if($par == substr($article, $k, strlen($par))){
				$k = $this->changeContent($par, $pare, $k, $closetagpos);
			}
			// Case for text open tag
			else if($text == substr($article, $k, strlen($text))){
				$k = $this->changeContent($text, $texte, $k, $closetagpos);
			}
			// Case for paragraph close tag
			else if($pare == substr($article, $k, strlen($pare))){
				$k = $this->changeContent($pare, '</p>', $k, $closetagpos);
			}
			// Case for text close tag
			else if($texte == substr($article, $k, strlen($texte))){
				$k = $this->changeContent($texte, '</text>', $k, $closetagpos);
			}
			// Case for bold open tag
			else if($bold == substr($article, $k, strlen($bold))){
				$k = $this->changeContent($bold, '<b>', $k, $closetagpos);
			}
			// Case for italic open tag
			else if($italic == substr($article, $k, strlen($italic))){
				$k = $this->changeContent($italic, '<i>', $k, $closetagpos);
			}
			// Case for underline open tag
			else if($underline == substr($article, $k, strlen($underline))){
				$k = $this->changeContent($underline, '<u>', $k, $closetagpos);
			}
			// Case for bold close tag
			else if($bolde == substr($article, $k, strlen($bolde))){
				$k = $this->changeContent($bolde, '</b>', $k, $closetagpos);
			}
			// Case for italic close tag
			else if($italice == substr($article, $k, strlen($italice))){
				$k = $this->changeContent($italice, '</i>', $k, $closetagpos);
			}
			// Case for underline close tag
			else if($underlinee == substr($article, $k, strlen($underlinee))){
				$k = $this->changeContent($underlinee, '</u>', $k, $closetagpos);
			}
			// Case for link open tag
			else if($link == substr($article, $k, strlen($link))){
				$k = $this->changeContent($link, $linke, $k, $closetagpos);
			}
			// Case for link close tag
			else if($linke == substr($article, $k, strlen($linke))){
				$k = $this->changeContent($linke, '</a>', $k, $closetagpos);
			}
			// Case if none found, get to next char
			else{
				$k+=1;
			}

		return $k;	
	}
			
		
		// Main function to translate
		public function rewrite($input)
		{	global $article;
			global $i;
			$article=$input;
			$alen = strlen($article);
			// Check characters one-by-one 
			while ($i<$alen) {

				$char = substr($article, $i, 1);
				// Case for beginning of open tag found, check for the tag
				if (($char == "[" )) 
				{
					$i = $this->check($i);
					$alen = strlen($article);
				}
				// Case if enter was found, replace it with <br>
				else if (($char == "\n")) 
				{
					$i = $this->replace("<br>", $i, 1);
					$alen = strlen($article);
				}
				// Case if tab was found, replace it with &emsp;
				else if ($char == "\t") 
				{
					$i = $this->replace("&emsp;", $i, 1);
					$alen = strlen($article);
				}
				// Case if double space found,  replace it with &nbsp;
				else if (substr($article, $i, 2) == "  ") 
				{
					$i = $this->replace("&nbsp;", $i, 2);
					$alen = strlen($article);
				}
				// Case none found, go to next char
				else
				{
					$i+=1;				
				}
			} 
			return $article;	
		}
}		
		
$input = '[P ALIGN=CENTER]WF[URL="https://id.wikihow.com/Menyisipkan-Spasi-Dalam-HTML"]AF\\\\\[/URL]\\[/P][P ALIGN=RIGHT][YT]EKyirtVHsK0[/YT][/P]



[P ALIGN=CENTER]SDSCX[/P]';

$translate = new dbToHTML;

echo $translate->rewrite($input);
?>