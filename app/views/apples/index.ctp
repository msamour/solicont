	<script type="text/javascript">	
jQuery(document).ready(function(){ 
	

//Grid For Master Table	
  jQuery("#list").jqGrid({
    url:'<?php echo $html->url('/apples/indextable') ?>',
    datatype: 'xml',
    mtype: 'GET',
    colNames:['Id','Name',],
    colModel :[ 
      {name:'id', index:'id', width:200}, 
      {name:'name', index:'name', width:200,editable:true}
             ],        
    pager: jQuery('#pager'),
    rowNum:10,
    rowList:[10,20,30],
    sortname: 'id',
    sortorder: 'desc',
    multiselect: false,
    viewrecords: true,
    imgpath: '/demo/app/webroot/js/jqgrid/themes/coffee/images',
    caption: 'Apple',     
    editurl:'<?php echo $html->url('/apples/indexedit') ?>',
    height:230,
    loadError : function(xhr,st,err) { jQuery("#rsperror").html("Type: "+st+"; Response: "+ xhr.status + " "+xhr.statusText); }
   
   }); 
 
   jQuery("#list").navGrid("#pager",{edit:true,add:true,del:true},
    								 {width:400,height:400,closeAfterEdit:true
    								 },
    								 {width:400,height:400,closeAfterAdd:true
    								  }
    								 ); 	

	
});
</script>




<span id="rsperror" style="color:red"></span> 

<table id="list" class="scroll"></table> 
<div id="pager" class="scroll" ></div> 
<div id="spacer" style="height:20px;"></div> 

