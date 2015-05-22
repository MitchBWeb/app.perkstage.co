<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User Account</title>
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
   <!-- <link rel="stylesheet" type="text/css" href="../css/style.css" />
	<script type="text/javascript" src="../js/jqueryui-1.10.3.min.js"></script>
--><script>
/*$("#createaccount").click(function(){
  alert("ssssssssssss");
});*/
</script>
</head>
<body>

	<div id="body">
    <table style="margin-top:-25px;">
    	<tr>
        	<td>
            	Activity
            </td>
       	<td>
            	Account
            </td>
        </tr>
    </table>
    <form action="user_account_add" method="post">
	<table  style="margin-top:25px;">
    	<tr>
        	<td>
            	Account Profile
            </td>
            <td>
            	Account Contact
            </td>
        	<td>
            	Account Option
            </td>
        </tr>
        <tr>
        	<td>
 				<input style="width:170px;"  type="text"  placeholder="Account Lable" id="lable" name="txt_lable" required/>	
 	        </td>
        	<td>
 				<input type="email" placeholder="Email"  id="email" name="txt_email" required/>	
 	        </td>
        	<td>
			<select name="lst_acceptaccount" style="width:148px;" >
                <option value="">Accept Account</option>
                <option value="Accept">Accept</option>
                <option value="Accept">Accept</option>
                <option value="Accept">Accept</option>
            </select>
 	        </td>
        
        </tr>
        <tr>
        	<td>
 				<input type="text" style="width:170px;"  placeholder="Address " id="address" name="txt_address" required/>	
 	        </td>
        	<td>
 				<input type="text" placeholder="First Name"  id="first_name" name="txt_firstname" required/>	
 	        </td>
        	<td>
			<select name="lst_sharecontent" style="width:148px;" >
                <option value="">Share Content</option>
                <option value="Content">Content</option>
                <option value="Content">Content</option>
                <option value="Content">Content</option>
            </select>
 	        </td>
        
        </tr>
        <tr>
        	<td>
 				<input style="width:76px;" type="text"  placeholder="City " id="city" name="txt_city" required/>	
 				<input style="width:84px;" type="text" placeholder="State"  id="state" name="txt_state" required/>	
 	        </td>
        	<td>
 				<input type="text" placeholder="Last Name"  id="lastname" name="txt_lastname" required/>	
 	        </td>
        	<td>
			<select name="lst_activeaccount" style="width:148px;" >
                <option value="">Active Account</option>
                <option value="1">Active</option>
                <option value="0">InActive</option>
            </select>
 	        </td>
        
        </tr>
        <tr>
        	<td>
 				<input type="text" style="width:76px;"  placeholder="Zip " id="zip" name="txt_zip" required/>	
 	        
			<select name="lst_country" style="width:90px;" >
                <option value="">Country</option>
                <option value="Pakistan">Pakistan</option>
                <option value="China">China</option>
                <option value="India">India</option>
            </select>
        	</td>
            <td>
 				<input type="text" placeholder="Phone"  id="phone" name="txt_contPhone" required/>	
 	        </td>
        	
        </tr>
        
        <tr>
        	<td>
 				<input type="text" style="width:76px;"  placeholder="Phone " id="phone" name="txt_profPhone" required/>	
 	       
				<select name="lst_timezone" style="width:90px;" >
                <option value="">TimeZone</option>
                <option value="11:00">11:00</option>
                <option value="10:00">10:00</option>
                <option value="09:00">09:00</option>
            </select>
        	</td>
            <td>
				<select name="lst_recText" style="width:148px;" >
                <option value="">Receive Texts</option>
                <option value="abc">abc</option>
                <option value="xyz">xyz</option>
            </select>
            </td>
        </tr>
    
    
   
        <input style="float:right;" type="button" value="Close" id="btnclose" />

 </table>
        <input style="float:right;" type="submit" value="Save" id="btnsave" />
        <input style="float:right;" type="reset" value="Cancel" id="btncancel" />
    </form>	
    </div>    
    </div>
</body>
</html>