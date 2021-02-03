<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise:3</Exercise:3></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<style>
  /* This is the CSS part */


        input:invalid {
          border: 2px dashed red;
          
        
        }
  
        input:invalid:required {
          background-image: linear-gradient(to right, pink, lightgreen);
        }
  
        input:valid {
          border: 2px solid black;
    }

   h5{
       color:#2F067B ;

 
   }
   h2{
       color:#F2340A;
       text-align:center;
     
   }
   footer{
       text-align:center;
       color:orange;
    
   }
   li{
       color:purple;
       font:italic;
       background:white;
   }

   input:invalid:required {
          background-image: linear-gradient(to right, pink, lightgreen);
        }
  
       

    </style>
<!--css ending-->
   


<h2>Use IF else</h2>


    <div class="container">


        #1.<h5> Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:

        It's August, so it's still holiday.
        Not August, This is Month-name so i don't have any holidays

        You can use date(F) function to get the current month name</h5>
        <br>

        <li><?php
        $d = date ("M");

        if ($d != "Aug"){
            echo "Not August, This is "; echo date("F"). " so i don't have any holidays<br>";
        }
                else{
                echo "It's August, so it's still holiday<br>";
                
                }
        ?></li>
        <br>

        #2.<h5> Assign color red to a variable name $color and check to print one the following responses using if else statement 

        The color is red. 

        The color is not red.</h5>
        <br>

        <li><?php
        $color="red";

        if($color=="red"){
            echo " the color is red";
        }

        else{
            echo "the color is not red";
        }

        ?></li>

        <br><br>

        #3.<h5> Write a program to grade students based on their total score for a subject. The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; Pass >50 & less than 60 & Fail < 50</h5>

        <br>

        <li><?php

        $web =90;
        $python=90;
        $finnish1=72;
        $programming=49;
        $english=78;

        $total =($web + $python + $finnish1+ $programming + $english)/5;

        $grade = "?";
        switch ($total)
        {
            case($total>=80);
            echo " Excellent!!!<br>";
            echo" Grade: A";
            break;

            case($total<80  && $total>=70);
            echo"Great!!<br>";
            echo" Grade: B";
            break;


            case($total<70  && $total>=60);
            echo"Good!<br>";
            echo" Grade: C";
            break;


            case($total<60  && $total>=50);
            echo"Pass<br>";
            echo" Grade: D ";
            break;
            default;

            echo" Sorry your are Fail";
        }

        echo "  Total is" . $total . '<br>' ;

        ?></li>



        <br>

        #4.<h5> Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.)</h5>
        <br><br>

        <form name ="form1" method="input" action="exercise.php">
            <ul> 
        <li> <labe> First Name: </label> <input type="text" name="fname" ></li><br>
        <li><label> Last Name: </label><input type="text" name="lname"></li>
        <li><label> Gender: </label></li>
        <input type= "radio" name="sex" value="male" checked>Male
        <input type= "radio" name="sex" value="female" checked>Female
        <input type= "radio" name="sex" value="other" checked>other<br><br>

        <li> <label> Age:</label> <input type="number" name="age" value="18" min="18" max="100"></li><br>

        <input type ="submit" value = "Submit"> <br>
        </ul>
        </form>

            



        <br>

        #5.<h5> Use a looping statement to construct the following pattern:</h5><br>


        <br>
            <?php
            /* echo " lets assume two numbers i and j"; */

            for($i=8; $i>0; $i--){
                for($j=0; $j<$i; $j++){
                    echo $j+1 . " ";
                }
                echo "<br />";

            }

            ?>


        <br>
        #6.<h5> Use While loop to print the following pattern:</h5><br> 
        

                        
                <?php
                        /* echo " lets assume two numbers i and j"; */

                        for($i=0; $i<9; $i++){
                            for($j=0; $j<$i; $j++){
                                echo"*";
                            }
                            echo "<br />";

                        }

                    ?>  
                    <br>


    

      


        #7.<h5>Create a GitHub repo and enable GitHub pages for the repo. Upload an HTML file of yours to the repo. You should include in your PHP code the link to the repo and your web page.</h5>
        <br>
        
          <li><a href="https://shivaskraj2006.github.io/webproject/">My site is published here</a></li><br>






        <br><br>
        
        #8.<h5>Give  1 or 0 point for the clarity of the task (User interface).</h5><br>
           <li><?php

           $input=1;
           if($input==0){

               echo" Your task got : 0 <br>";
           }
           else{
               echo" your task  got :1 <br>";
           }
            
            ?></li>
            <br>


           <form name="form1" method="$input" action="insert.php">
          <li><label>Number Enter:</label> <input type="number" name="task" value="" min="0" max=1></li>
          </form><br><br><br><br>
       


         <footer class="footer" text-align="center">
              Done By: Shiva Raj Acharya
             <h3> !Stay Safe!</h3><br>
             </footer>
             <!--Bootstrap code-->
             <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
             </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
            </script>
                 
    </div>
</body>

</html> 
                   

        