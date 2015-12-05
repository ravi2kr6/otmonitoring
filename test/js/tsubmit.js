
$(document).ready(function()
						   {
							  
       
$.ajax({
	   url:"getquestion.php",
	   type:"POST",
	   cache:false,
	   dataType:"json",
	  success:function(response,jqXHR)
	   {
		var qid=response[0].qid;
		var question=response[0].question;
		var ans=response[0].ans;
		var ans1=response[0].ans2;
		var ans2=response[0].ans3;
		var ans3=response[0].ans4;
		$('#qid').val(qid);
		$('#question').text(question);
		$('#one').val(ans);
		$('#two').val(ans1);
		$('#three').val(ans2);
		$('#four').val(ans3);
		$('#one1').text(ans);
		$('#two2').text(ans1);
		$('#three3').text(ans2);
		$('#four4').text(ans3);
		
		
	   }
	
	   });
							
							   


							  
                                
								
								
						   });