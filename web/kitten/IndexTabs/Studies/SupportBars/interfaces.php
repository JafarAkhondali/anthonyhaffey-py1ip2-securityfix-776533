<!--
/*  Collector (Garcia, Kornell, Kerr, Blake & Haffey)
    A program for running experiments on the web
    Copyright 2012-2016 Mikey Garcia & Nate Kornell


    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License version 3 as published by
    the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>
 		
		Kitten release (2019) author: Dr. Anthony Haffey (a.haffey@reading.ac.uk)		
*/
-->
<style>
  .display_button{
		margin:2px;
	}
</style>

<span id="hide_show_table_span"></span>
    
<script>
hide_show_table_span_html = '';
var page_parts = ["Presentation","Conditions","Procedure","Stimuli","TrialTypes"];
page_parts.forEach(function(page_part){
	hide_show_table_span_html += "<button class='btn btn-primary collectorSwitch display_button' type='button'>"+page_part+"</button>";
	$("#"+page_part).on('show hide', function() {
		$("#"+page_part).css('height', 'auto');
		$("#"+page_part).css('width', 'auto');
	});
});
$("#hide_show_table_span").html(hide_show_table_span_html);
$(".display_button").on("click",function(){
	var this_id = "#"+this.innerHTML;
	if($(this_id).is(":visible")){
		$(this_id).hide();
	} else {
		$(this_id).show();
	}
});

</script>