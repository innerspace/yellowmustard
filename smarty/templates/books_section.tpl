{{*<!--
        Name:		 Calibre PHP webserver
        License:	 GPL v3
        Copyright:	 2010, Charles Haley <charles@haleys.org
-->*}}
<table class="books_section">
{{section name=book loop=$books}}
    <tr class="query_results">
        <td class="book_cover">
            <img src="{{$books[book].cover}}"><br>
        </td>
        <td class="book_info">
            <div class="book_title">{{$books[book].title}}</div>
            <div class="book_author">{{$books[book].field_authors}}</div>
            {{if $books[book].rating_url}}<img style="vertical-align: middle" src="{{$books[book].rating_url}}"><br>{{/if}}
            <div class="book_formats">
            {{section name=format loop=$books[book].formats}}
                <a href="{{$books[book].formats[format].URL}}">{{$books[book].formats[format].format}}</a> {{$books[book].formats[format].size}}<br>
            {{/section}}
            </div>
        </td>
        <td class="book_details">
            {{section name=field loop=$books[book].field_names}}
	             {{$books[book].field_names[field]}}: {{$books[book].field_values[field]}}<br>
            {{/section}}
            {{if $books[book].details_url}}
                <div class="book_details">
                    <a href={{$books[book].details_url}}>Book details</a><br>
                </div>
            {{/if}}
        </td>
        <td class="book_comments">
            {{if $books[book].comments != ''}}{{$books[book].comments}}<br>{{/if}}
            {{section name=cust loop=$books[book].custom_comments_names}}
                {{$books[book].custom_comments_names[cust]}}:{{$books[book].custom_comments_values[cust]}}
            {{/section}}
        </td>
    <tr>
        <td colspan="4"><hr></td>
    </tr>
    </tr>
{{/section}}
</table>
