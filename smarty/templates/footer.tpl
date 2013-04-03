﻿{{*<!--
        Name:		 Calibre PHP webserver
        License:	 GPL v3
        Copyright:	 2010, Charles Haley <charles@haleys.org
-->*}}
<div class="footer">
    <div class="date">Current date: {{$current_date}}</div>
    <br>
    <div class="version">Current version: {{$current_version}}</div>
    <br>
    
<table width="100%">
    <tr>
    <form action="index.php" method="get" >
        <td>
            {{if $page_back}}<a href="{{$page_back}}">prev</a>{{else}}prev{{/if}}
            &nbsp;&nbsp;&nbsp;Page <input name="p" type="text" size="1" value="{{$page}}">
            <input name="gotopage" type="submit" value="Go!"> of {{$maxpage}}&nbsp;&nbsp;&nbsp;
            {{foreach from=$prev_next item=item}}
                <input type="hidden" name="{{$item[0]}}" value="{{$item[1]}}">
            {{/foreach}}
            {{if $page_forw}}<a href="{{$page_forw}}">next</a>{{else}}next{{/if}}
          </td>
    </form>
    <form action="index.php" method="get" >
        <td>
            Sort on:
            <select name="sort_by" id="sortable">
            {{foreach from=$sortable_fields item=sortable}}
                <option value="{{$sortable}}" {{if $sortable == $current_sortable}}SELECTED{{/if}}>{{$sortable}}</option>
            {{/foreach}}
            </select>
            &nbsp;
            <select name="sort_direction">
                <option value="0" {{if $current_sort_direction == 0}}SELECTED{{/if}}>Ascending</option>
                <option value="1" {{if $current_sort_direction != 0}}SELECTED{{/if}}>Descending</option>
            </select>
            <input type="hidden" name="m" value="sort">
            <input name="sort" type="submit" value="Go!">
        </td>
    </form>
    </tr>
    </table>
    
    
    
</div>
</body>
</html>
