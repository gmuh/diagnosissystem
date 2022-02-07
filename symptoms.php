<?php
$page_title="home"; 
 include('includes/header.php');
 ?>
<style>
		#footer{
 			margin-bottom: 100px;
			border-radius: 25%;
			text-align: center;
			background-color: green;
			margin-top: auto;
			width: 90%;
			}				
   </style>      
		 <h2 class="green">You can <strong style="color:red";>thick</strong> any of the listed symptoms you are experiencing.</h2>
    <form action="symptoms.php" method="POST">
	        <table> 
            <tr>
               <th style="color:blue";>Early Symptoms</th>
			   <th width=140px;> </th>
			   <th style="color:blue";>Late Symptoms</th>
			</tr>
			<tr>
			 <ol>
             <td>Low grade fever <input type="checkbox" name="values[]" value="symptom"></td> 
			 <td>  </td>
			 <td>Rapid weight loss more than 15%<input type="checkbox" name="values[]" value="symptom"></td>
            </tr> 
			<tr>
             <td>Headache <input type="checkbox" name="values[]" value="symptom"></td> 
			 <td>  </td>
			 <td>Relapsing fever <input type="checkbox" name="values[]" value="symptom"></td>
			</tr>
			<tr>
             <td>Nausea <input type="checkbox" name="values[]" value="symptom"></td> 
			 <td>  </td>
			 <td>All kind of bacterial, viral, parasitic and fungal infections<input type="checkbox" name="values[]" value="symptom"></td>
            </tr>
			<tr>
             <td>Tiredness<input type="checkbox" name="values[]" value="symptom"></td> 
			 <td>  </td>
			 <td>Excessive Fatigue<input type="checkbox" name="values[]" value="symptom"></td>
            </tr>
			  <tr>
             <td> </td> 
			 <td>  </td>
			 <td>Enlargement of lymph glands in the armpits, groin etc<input type="checkbox" name="values[]" value="symptom"></td>
             </tr> <tr>
             <td> </td> 
			 <td>  </td>
			 <td>Diarrhea more than a week<input type="checkbox" name="values[]" value="symptom"></td>
             </tr>
			 <tr>
             <td> </td> 
			 <td>  </td>
			 <td>Recurring Pneumonia <input type="checkbox" name="values[]" value="symptom"></td>
             </tr>
			 <tr>
             <td> </td> 
			 <td>  </td>
			 <td>Loss of memory and other neurological disorders<input type="checkbox" name="values[]" value="symptom"></td>
             </tr>
			 <tr>
             <td> </td> 
			 <td>  </td>
			 <td>Increased risk of Cancer, lymphoma, Kaposis sarcoma and cervical cancer<input type="checkbox" name="values[]" value="symptom">
			 <br>
			 <br></td>
			 <br>
             </tr>
			 
			 <tr>
			
                        <td colspan="10" align="center"><input type="submit" name="send" value="Diagonise" /><input type ="reset" value="Cancel">
						</tr>
						<input type="hidden" name="submitted" />
						
							
	</form>
	        </table>
			<br>
			<br>
			<?php
			if(isset($_POST['submitted'])){
				if(!empty($_POST['values'])){
				$count =count($_POST['values']);
								
			    if($count > 2){
			header("location:test.php");
			  
			}
		}
		else{
		echo " you have not choose any options";
		}
		}
			?>


		<div id="content">
			<div class="box">
			
				<h2 class="green">
			
	<?php
include('includes/footer.php');
?>

			
			