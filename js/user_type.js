function validateForm() {

    var x = document.forms["myForm"]["user_type"].value;
   
    
    if (x == "Coordinator") {
        header("location: dashboard/coordinator.php");

        
    }else if(x=="Supervisor"){
    	header("location: dashboard/supervisor.php");
       
        
    }  
    else  {
    	header("location: dashboard/student.php");
        
    }
    
   

}