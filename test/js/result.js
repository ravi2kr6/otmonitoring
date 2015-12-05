$(document).ready(function(){
						    var start;
                            start= new Date()/1000;
                            var user=$('#uid').val();
						/*	if((window.fullScreen) ||(window.innerWidth == screen.width && window.innerHeight == screen.height)) { alert("minimized window");} 
							else {
                                           alert("Window not minimized");            	  
                                                                            $.ajax({
										                                            url:"reject.php",
										                                            type:"POST",
																		        	data:'user='+user,
										                                            cache: false,
										                                    success:function(data)
										                                    {
										                                    	
										                                     location.reload();
										                                    }
										                                           });
                                  
				 }*/
				 
				                 $( window ).resize(function() {
				                 	alert("Window resized");            	  
                                                                            $.ajax({
										                                            url:"reject.php",
										                                            type:"POST",
																		        	data:'user='+user,
										                                            cache: false,
										                                    success:function(data)
										                                    {
										                                    	
										                                     location.reload();
										                                    }
										                                           });
                                  
  
                        });
     /*                   

$(document).hover(
  function() {
   	alert("Mouse Exited");            	  
                                                                            $.ajax({
										                                            url:"reject.php",
										                                            type:"POST",
																		        	data:'user='+user,
										                                            cache: false,
										                                    success:function(data)
										                                    {
										                                    	
										                                     location.reload();
										                                    }
										                                           });
  }, function() {
    	alert("Mouseexited");            	  
                                                                            $.ajax({
										                                            url:"reject.php",
										                                            type:"POST",
																		        	data:'user='+user,
										                                            cache: false,
										                                    success:function(data)
										                                    {
										                                    	
										                                     location.reload();
										                                    }
										                                           });
  }
); */
$(document).mouseleave(function(){
   	alert("Mouseexited");            	  
                                                                            $.ajax({
										                                            url:"reject.php",
										                                            type:"POST",
																		        	data:'user='+user,
										                                            cache: false,
										                                    success:function(data)
										                                    {
										                                    	
										                                     location.reload();
										                                    }
										                                           });
});
							$("#test").submit(function(event){
														  
														   
								  var end=new Date()/1000;
								  var timespent=end-start;
								  //alert(timespent);
								  var ans=$('input[name=ans1]:checked').val();
					              var qid=$('#qid').val();
                                         $.ajax({
										 url:"result.php",
										  type:"POST",
										  data:'ans='+ans+'&timespent='+timespent+'&qid='+qid+'&user='+user,
										  cache: false,
										  success:function(data)
										  {
										  	location.reload();
										  }
										  
										  });
							   
							event.preventDefault();
							
							   });
							   
							    $(document).keydown(function(event){
                                                                  event.preventDefault();
                                                                  var end=new Date()/1000;
								                                  var timespent=end-start;
								  
								                                  var ans=$('input[name=ans1]:checked').val();
					                                              var qid=$('#qid').val();
                                                                  if(event.which==13)
                                                                    {
                                                                     $.ajax({
										                                                             url:"nop.php",
										                                                             type:"POST",
										                                                             
										                                    data:'timespent='+timespent+'&qid='+qid+'&user='+user,
										                                    cache: false,
										                                    success:function(data)
										                                    {
										                                     location.reload();										                           
										                                     }
							   	                                            
							   	                                            });
                                                                    }
                                                                    else{
                                                                    	alert("wrong key pressed");
                                                                    	    $.ajax({
										                                            url:"reject.php",
										                                            type:"POST",
																		        	data:'user='+user,
										                                            cache: false,
										                                    success:function(data)
										                                    {
										                                       location.reload();
										                                    }
										                                           });
                                  
                                                                    	
                                                                    }
                                                                    
                                                                    });
                                  
                
                
                
                                  setTimeout(function(){          alert("timeout");
                                  	                              var end=new Date()/1000;
								                                  var timespent=end-start;
								  
								                                  var ans=$('input[name=ans1]:checked').val();
					                                              var qid=$('#qid').val();
                                                                  
							   	                                                            $.ajax({
										                                                             url:"nop.php",
										                                                             type:"POST",
										                                    data:'timespent='+timespent+'&qid='+qid+'&user='+user,
										                                    cache: false,
										                                    success:function(data)
										                                    {
										                                     location.reload();	
										                                    }
							   	                                            
							   	                                            });
                                                                          },60000);
					   });
