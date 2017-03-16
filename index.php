<?php

	$start = "http://localhost/Crawler/links.php";	//link of the web page you want to crawl


	//function to crawl the web page
	function follow_links($url){

		$doc = new DOMdocument();
		$doc->loadHTML(file_get_contents($url));

		$linklist = $doc->getElementsByTagName("a");

		foreach ($linklist as $link) {

			$l = $link->getAttribute("href")."\n";

			if(substr($l, 0, 1) == "/" && substr($l, 0, 2) != "//"){

				$l = $l;
			}

			echo $l."\n";


		}


	}


	//Calling the function which will crawl
	follow_links($start);

?>