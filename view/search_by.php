<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Search Student Details</title>
<link rel="stylesheet" />
<style>
	  body, html {
          height: 100%;
          margin: 0;
          -webkit-font-smoothing: antialiased;
          font-weight: 100;
          background: #aadfeb;
          text-align: center;
          font-family: helvetica;
      }
      input#bigbutton{

      	position: relative;	
		top: 600px;
		right: 500px;
		margin-bottom: 20px;
		width:500px;
		background: #3e9cbf; /*the colour of the button*/
		padding: 8px 14px 10px; /*apply some padding inside the button*/
		border:1px solid #3e9cbf; /*required or the default border for the browser will appear*/
		cursor:pointer; /*forces the cursor to change to a hand when the button is hovered*/
		/*style the text*/
		font-size:1.5em;
		font-family:Oswald, sans-serif; /*Oswald is available from http://www.google.com/webfonts/specimen/Oswald*/
		letter-spacing:.1em;
		text-shadow: 0 -1px 0px rgba(0, 0, 0, 0.3); /*give the text a shadow - doesn't appear in Opera 12.02 or earlier*/
		color: #fff;
		/*use box-shadow to give the button some depth - see cssdemos.tupence.co.uk/box-shadow.htm#demo7 for more info on this technique*/
		-webkit-box-shadow: inset 0px 1px 0px #3e9cbf, 0px 5px 0px 0px #205c73, 0px 10px 5px #999;
		-moz-box-shadow: inset 0px 1px 0px #3e9cbf, 0px 5px 0px 0px #205c73, 0px 10px 5px #999;
		box-shadow: inset 0px 1px 0px #3e9cbf, 0px 5px 0px 0px #205c73, 0px 10px 5px #999;
		/*give the corners a small curve*/
		-moz-border-radius: 10px;
		-webkit-border-radius: 10px;
		border-radius: 10px;
}  
		input#bigbutton:hover, input#bigbutton:focus {
		color:#dfe7ea;
		/*reduce the size of the shadow to give a pushed effect*/
		-webkit-box-shadow: inset 0px 1px 0px #3e9cbf, 0px 2px 0px 0px #205c73, 0px 2px 5px #999;
		-moz-box-shadow: inset 0px 1px 0px #3e9cbf, 0px 2px 0px 0px #205c73, 0px 2px 5px #999;
		box-shadow: inset 0px 1px 0px #3e9cbf, 0px 2px 0px 0px #205c73, 0px 2px 5px #999;
		}      
      .tabs input[type=radio] {
          position: absolute;
          top: -9999px;
          left: -9999px;
      }
      .tabs {
        width: 650px;
        float: none;
        list-style: none;
        position: relative;
        padding: 0;
        margin: 75px auto;
      }
      .tabs li{
        float: left;
      }
      .tabs label {
          display: block;
          padding: 10px 20px;
          border-radius: 2px 2px 0 0;
          color: #08C;
          font-size: 24px;
          font-weight: normal;
          font-family: 'Lily Script One', helveti;
          background: rgba(255,255,255,0.2);
          cursor: pointer;
          position: relative;
          top: 3px;
          -webkit-transition: all 0.2s ease-in-out;
          -moz-transition: all 0.2s ease-in-out;
          -o-transition: all 0.2s ease-in-out;
          transition: all 0.2s ease-in-out;
      }
      .tabs label:hover {
        background: rgba(255,255,255,0.5);
        top: 0;
      }
       
      [id^=tab]:checked + label {
        background: #08C;
        color: white;
        top: 0;
      }
       
      [id^=tab]:checked ~ [id^=tab-content] {
          display: block;
      }
      .tab-content{
        z-index: 2;
        display: none;
        text-align: left;
        width: 100%;
        font-size: 20px;
        line-height: 140%;
        padding-top: 10px;
        background: #08C;
        padding: 15px;
        color: white;
        position: absolute;
        top: 53px;
        left: 0;
        box-sizing: border-box;
        -webkit-animation-duration: 0.5s;
        -o-animation-duration: 0.5s;
        -moz-animation-duration: 0.5s;
        animation-duration: 0.5s;
      }
      .container {
		  width: 100%;
		  height: 100%;
		  display: flex;
		  flex-wrap: wrap;
		  justify-content: center;
		  align-items: center;
		}
		input[type=textbox] {
		    visibility:hidden;
		}
		input[type=date] {
		    visibility:hidden;
		}

		input[type=checkbox]:checked + input[type=textbox] {
		    visibility:visible;
		}
		input[type=checkbox]:checked + input[type=date] {
		    visibility:visible;
		}
		input[type='checkbox'], input[type='radio']{      
		   background-image: url('../images/controls.png'); 
		   background-repeat: no-repeat;
		   width: 16px;
		   height: 16px;
		   margin: 0;
		   padding: 0;
		   -moz-appearance: none; /* not working */
		   -webkit-appearance: none;
		   -ms-appearance: none; /*not working */
		   -o-appearance: none;
		   appearance: none;
		}

		input[type='checkbox']:checked { background-position: -16px 0; }
		input[type='checkbox']:hover:checked, 
		input[type='checkbox']:focus:checked { background-position: -16px -16px; }

</style>

</head>

<body>
<p>
	you are logged as   <?php echo $_SESSION['username'] ?> .
	</br>
	<a href="../index.php?op=logout">Logout</a>
</p>
 <form method="POST" action="../controller/admin_controller.php"><br>

	<ul class="tabs">
        <li>
          <input type="radio" checked name="tabs" id="tab1">
          <label for="tab1">Student</label>
          <div id="tab-content1" class="tab-content animated fadeIn">
		      <div class="container">
			   		<div class="control-group">
				    <h1>Student</h1>


				 <input type="hidden" name="array1[1][]" value="student">
				    <input type="hidden" name="array1[0][]" value="student">
					<input id="ID1" type="checkbox" name="array1[0][]" value="first_name"> First Name
					<input type="textbox"  name="array1[1][]" value="" placeholder="First Name here" /> <br />
					<br />

					<input id="ID2" type="checkbox" name="array1[0][]" value="last_name"> Last Name
					<input type="textbox" name="array1[1][]"  value="" placeholder="Last Name here" /> <br />
					<br />

					<input id="ID3" type="checkbox" name="array1[0][]" value="school"> School
					<input type="textbox" name="array1[1][]" value="" placeholder="School Name here" /> <br />
					<br />

					<input id="ID4" type="checkbox" name="array1[0][]" value="birthdate"> Birthdate
					<input type="date" name="array1[1][]"  value="" placeholder="Birthday here" /> <br />
					<br /> 

					<input id="ID5" type="checkbox" name="array1[0][]" value="religion"> Religion
					<input type="textbox" name="array1[1][]"  value="" placeholder="Religion here" /> <br />
					<br />

					<input id="ID6" type="checkbox" name="array1[0][]" value="gender"> Gender
					<input type="textbox" name="array1[1][]" value="" placeholder="Gender here" /> <br />
					<br />

					<input id="ID7" type="checkbox" name="array1[0][]" value="reg_date"> Registered Date
					<input type="textbox" name="array1[1][]" value="" placeholder="Register Date" /> <br />
					<br />

					<input id="ID8" type="checkbox" name="array1[0][]" value="out_date"> Pass Out Date
					<input type="textbox" name="array1[1][]" placeholder="Pass Out Date" /> <br />
					</div>

			   </div>
          </div>
        </li>
        <li>
          <input type="radio" name="tabs" id="tab2">
          <label for="tab2">Parent</label>
          <div id="tab-content2" class="tab-content animated fadeIn">
            	<div class="container">
				    <div class="control-group">
				    <h1>Parent</h1>
					<input id="ID1" type="checkbox" name="NAME1" > Father Name
					<input type="text" /> <br />
					<br />

					<input id="ID2" type="checkbox" name="NAME2"> Mother Name
					<input type="text" /> <br />
					<br />

					<input id="ID3" type="checkbox" name="NAME3"> Spouse
					<input type="text" /> <br />
					</div>

			   </div>
          </div>
        </li>
        <li>
          <input type="radio" name="tabs" id="tab3">
          <label for="tab3">Hostel</label>
          <div id="tab-content3" class="tab-content animated fadeIn">
            	<div class="container">
				    <div class="control-group">
				    <h1>Hostel</h1>
					<input id="ID1" type="checkbox" name="NAME1" > Hostel ID
					<input type="text" /> <br />
					<br />

					<input id="ID2" type="checkbox" name="NAME2"> Start Date
					<input type="text" /> <br />
					<br />

					<input id="ID3" type="checkbox" name="NAME3"> End Date
					<input type="text" /> <br />
					</div>

			   </div>
          </div>
        </li>
        <li>
          <input type="radio" name="tabs" id="tab4">
          <label for="tab4">Scholarship</label>
          <div id="tab-content4" class="tab-content animated fadeIn">
            	<div class="container">
				    <div class="control-group">
				    <h1>Scholarship</h1>
					<input id="ID1" type="checkbox" name="NAME1" > Scholarship ID
					<input type="text" /> <br />
					<br />

					<input id="ID2" type="checkbox" name="NAME2"> Start Date
					<input type="text" /> <br />
					<br />

					<input id="ID3" type="checkbox" name="NAME3"> End Date
					<input type="text" /> <br />
					</div>

			   </div>
          </div>
        </li>
        <li>
          <input type="radio" name="tabs" id="tab5">
          <label for="tab5">Student Address</label>
          <div id="tab-content5" class="tab-content animated fadeIn">
            	<div class="container">
				    <div class="control-group">
				    <h1>Student Address</h1>
					<input id="ID1" type="checkbox" name="NAME1" > No
					<input type="text" /> <br />
					<br />

					<input id="ID2" type="checkbox" name="NAME2"> Street
					<input type="text" /> <br />
					<br />

					<input id="ID3" type="checkbox" name="NAME3"> Town
					<input type="text" /> <br />
					</div>

			   </div>
          </div>
        </li>
        <li>
          <input type="radio" name="tabs" id="tab6">
          <label for="tab6">Course</label>
          <div id="tab-content6" class="tab-content animated fadeIn">
            	<div class="container">
				    <div class="control-group">
				    <h1>Course</h1>
					<input id="ID1" type="checkbox" name="NAME1" > First Name
					<input type="text" /> <br />
					<br />

					<input id="ID2" type="checkbox" name="NAME2"> Last Name
					<input type="text" /> <br />
					<br />

					<input id="ID3" type="checkbox" name="NAME3"> Area
					<input type="text" /> <br />
					</div>

			   </div>
          </div>
        </li>        
</ul>


<input  id="bigbutton" type="submit" name="op" value="Search Result" />

</form>

</div>
</body>
</html>