<h1>yellowmustard</h1>


<h2>This repo will contain a rehashing of the following package:</h2>

<p>
Name:  	 Calibre PHP webserver
License:	 GPL v3
Copyright:	 2010, Charles Haley  charles at haleys dot org
http://charles.the-haleys.org/calibre/calibre_php_server-V0.2.8.txt
http://charles.the-haleys.org/calibre/calibre_php_server-V0.2.8.zip
</p>

<h3><i>The author has stated that he no longer maintains/developes calibre-php.</i></h3>

<h2>
Initial changes included in this repo:
</h2>
-added pre CSS declaration (display inline)<br>
-added stylesheet declaration to index.php (echo head)<br>
-created css classes for nearly all elements<br>
-integrated Oxygen webfont<br>
-customized header/footer (added background-color, styled elements)<br>

<h2>
Things I've broken:
</h2>
<p>
-Sometime late last night I broke images associated with query results (covers!).
I have been unable to restore them on my dev install, however they still function on the 'production' server.
<br>*NOTE: displaying images broke while creating classes for td/tr elements in 'books_section.tpl'.
</p>
<h2>
Install Instructions: 
</h2>
<p>Extract package to a web-server accessible directory, update values in 'config_local.php' to reflect your environment.
Further instructions to follow.</p>
<h2>
Dependencies: 
</h2>
<p>Requires Smarty (instructions to follow)</p>
<h2>
Goals:
</h2>
Fixed broken images<br>
Redesign frontend<br>
Implement login system<br>
Implement admin system<br>
Add crowd-sourced ratings/comments<br>
Integrate multiple libraries (stacks)<br>
Add upload? (or remote libraries?).<br>
Stuff.<br>

