
<form method="post" action="#">  
    Enter 5 character series:&nbsp;<input type="text" name="user_input" value="" /><br />  
    <input type="submit" name="submit" value="Submit" />  
</form> 

<?php    
    $inputs = array();  
    if (isset($_POST['submit'])) //to check if the form was submitted  
    { 
        $inputs = str_split($_POST['user_input']);
        var_dump($inputs);  

        if (count($inputs) == 5) 
        {       
            if(($inputs[0]==$inputs[4])&&($inputs[1]==$inputs[3]))  
            {  
                echo implode($inputs) . ' is a palindrome. <br />';  
            }  
            else
            {  
                echo implode($inputs) . ' is not a palindrome. <br />';  
            }                                          
        }                           
        else  
        {  
            echo "Try Again : Enter 5 character series. :(";  
        }  
    }  

?>       
 

 
 
 