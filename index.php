<!DOCTYPE html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Editable Invoice</title>
	
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
    <link href='http://fonts.googleapis.com/css?family=Nothing+You+Could+Do' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
	<!--<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>-->
	<script type='text/javascript' src='https://code.jquery.com/jquery-1.11.1.min.js'></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>

	<div id="page-wrap">

		<!--<textarea id="header">INVOICE</textarea>-->
		
		<div id="identity">
		
            <div id="logo" class="">
                <h1>kym <span class="big-o">o</span><span class="superscript">'</span>neill</h1>

              <!--<div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/logo.png" alt="logo" /> -->
            </div>
            <address id="address" class="center-block">
<span class="curly">Licensed Massage Therapist</span> <br>
<span class="glyphicon glyphicon-home"></span>: 800 East 17th St #1D Brooklyn, NY 11230 <br>
<span class="glyphicon glyphicon-envelope"></span>: kymlmt@gmail.com <br>
<span class="glyphicon glyphicon-phone"></span>: 917.841.4633 <br>
</address>

		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">
            <div class="user"><span class=""></span></div>
            <textarea id="customer-title">thank you for your business: client name</textarea>
            <div class="user"><span class=""></span></div>
            <table id="meta" class="table table-condensed">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>000123</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date">December 15, 2009</textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">$875.00</div></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items" class="table table-condensed table-striped">
		
		  <tr>
		      <th>Date of Service</th>
		      <th>Description</th>
		      <th>Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>07/01/2123</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea>90 min deep tissue massage</textarea></td>
		      <td><textarea class="cost">$150.00</textarea></td>
		      <td><textarea class="qty">1</textarea></td>
		      <td><span class="price">$150.00</span></td>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>07/17/2123</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

		      <td class="description"><textarea>110 min thai massage</textarea></td>
		      <td><textarea class="cost">$175.00</textarea></td>
		      <td><textarea class="qty">3</textarea></td>
		      <td><span class="price">$525.00</span></td>
		  </tr>
		  
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		  
		  <tr class="finalize">
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">$875.00</div></td>
		  </tr>
		  <tr class="finalize">
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">$875.00</div></td>
		  </tr>
		  <tr class="finalize">
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value"><textarea id="paid">$0.00</textarea></td>
		  </tr>
		  <tr class="finalize">
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due">$875.00</div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>Cash | Check | Venmo</textarea>
		</div>
	
	</div>
	
</body>

</html>
