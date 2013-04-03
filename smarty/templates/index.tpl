<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  </head>
  <body>

    <pre>{{*&lt;!--
		Name:		 Calibre PHP webserver
		License:	 GPL v3
		Copyright:	 2010, Charles Haley &lt;charles@haleys.org
--&gt;*}}
{{include file="header.tpl" title="Home"}}
&lt;table&gt;&lt;tr&gt;&lt;td&gt;
&lt;div class="titles"&gt;
	&lt;a href="index.php?m=titles&amp;amp;p=1"&gt;
	&lt;img style="vertical-align: middle" src="images/book.png" border="0"&gt;&lt;span style="padding-left:10px"&gt;Titles&lt;/span&gt;&lt;/a&gt;
	[{{$title_count}}]
&lt;/div&gt;
{{section loop=$categories name=cat}}
&lt;div class="categories"&gt;
	&lt;a href="{{$categories[cat].href}}"&gt;
	&lt;img style="vertical-align: middle" src="{{$categories[cat].icon}}" border="0"&gt;&lt;span style="padding-left:10px"&gt;{{$categories[cat].name}}&lt;/span&gt;&lt;/a&gt;
	[{{$categories[cat].count}}]
&lt;/div&gt;
{{/section}}
&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;
{{include file='footer.tpl' foo='bar'}}

</pre>
    <br>
  </body>
</html>
