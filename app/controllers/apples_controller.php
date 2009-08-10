<?php
/*
 * Created on Nov 9, 2008
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 


 class ApplesController extends AppController
{
	
	var $name = 'Apples';
	var $helpers = array('Html', 'Ajax', 'Javascript','Form');
   
			function index()
			{
			
			
			}
			
// ***************************** Master Table **************************************8	
		    function indextable()
		    {
		    	
		    	
		    	$this->layout= 'empty';
		    
		        // pr($this->params);
		     	
		    	// to the url parameter are added 4 parameters as described in colModel
				// we should get these parameters to construct the needed query
				// Since we specify in the options of the grid that we will use a GET method 
				// we should use the appropriate command to obtain the parameters. 
				// In our case this is $_GET. If we specify that we want to use post 
				// we should use $_POST. Maybe the better way is to use $_REQUEST, which
				// contain both the GET and POST variables. For more information refer to php documentation.
				// Get the requested page. By default grid sets this to 1. 
		    	$page = $this->params['url']['page']; 
				
				// get how many rows we want to have into the grid - rowNum parameter in the grid 
				$limit =$this->params['url']['rows'];
			    
			    // get index row - i.e. user click to sort. At first time sortname parameter -
				// after that the index from colModel 
				$sidx =$this->params['url']['sidx']; 
				
				// sorting order - at first time sortorder 
				$sord =$this->params['url']['sord'];     
						
				// if we not pass at first time index use the first column for the index or what you want
				if(!$sidx) $sidx =1; 
		       
		        // calculate the number of rows for the query. We need this for paging the result 
		 		$row = $this->Apple->findCount();
		 		$count = $row;
		 		
		 		// calculate the total pages for the query 
				if( $count > 0 ) { 
				              $total_pages = ceil($count/$limit); 
				} else { 
				              $total_pages = 0; 
				} 
				
			
				// if for some reasons the requested page is greater than the total 
				// set the requested page to total page 
				if ($page > $total_pages) $page=$total_pages;
				
				// calculate the starting position of the rows 
				$start = $limit*$page - $limit;
				
				// if for some reasons start position is negative set it to 0 
				// typical case is that the user type 0 for the requested page 
				if($start <0) $start = 0; 
			
				// the actual query for the grid data 
				$limit_range = $start.",".$limit;
		    	$sort_range = $sidx." ".$sord;
		    	//$result = 0;
		    	$result = $this ->Apple->findAll(null,"id,name",$sort_range,$limit_range,1,null);
		        
		       
		        
		        $this->set('result',$result);
		        $this->set('page',$page);
		        $this->set('total_pages',$total_pages);
		        $this->set('count',$count); 
		         
		    	
		    
		    }
		    
    
    
		      function indexedit()
		    {		 
		    	  	
		    	//$this->layout= 'empty';	
		    	$this->autoRender = false;
		    	
		    	
		    	
		    			$action = $this->params["form"]["oper"];
		    		    
		             	
		             	if($action=="edit")
		             	{
		             			
		             	
					    	$id=$this->params["form"]["id"];		
					    	$name = $this->params["form"]["name"];
					    	
					    			    	
					   	   
					   	   	
  							$this->Apple->save(Array("id"=>$id,"name"=>$name,),null,null);		
		             	}
		             	
		             	
		             	if($action=="del")
		             	{
		             		
					    	$id=$this->params["form"]["id"];					     		
					   	    
					   	    //For Multiple Deletion
					   	    $exploded_id = explode(',', $id);
					   	    
					   	    for($i=0;$i<sizeof($exploded_id);$i++)
					   	    {
					   	    	$this->Apple->del($exploded_id[$i]);	
					   	    	
					   	    				
					   	    //	$fileDir = WWW_ROOT .'img/newsroom/press/'.$id;
					   	    //  $this->removeFolder($fileDir);
						   	    
						   	    	
					   	    }
					   	    //For Multiple Deletion
					   	    
					   	    
					   	    //single deletion :  $this->Paper->del($id);		
					   	    
		             	}
		             	
		             	if($action =="add")
		             	{
		             		
		             		$name = $this->params["form"]["name"];
					    	$this->Apple->save(Array("name"=>$name),null,null);		
		       	     
		              	}
		            	
		             	
		    }    
		    


}
			
  

?>
