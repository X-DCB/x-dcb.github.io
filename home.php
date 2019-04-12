
<html>
<head>
   <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
   <meta http-equiv="Pragma" content="no-cache">
   <meta http-equiv="Expires" content="0">
   <meta name="viewport" content="width=device-width">
   <title>Server Details</title>
   <link rel="stylesheet" type="text/css" href="stylesx1.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    
   <link rel="stylesheet" class="dark" type="text/css" href="stylesxd1.css">

   <script src="jquery-3.3.1.js"></script>
</head>
<body>
    <div id="mainx">
        <table id="mx">
            <tr>
                <td>Server :</td>
                <td><select><option selected disabled>- Select a Server -</option></select></td>
            </tr>
            <tr>
                <td>Owner :</td>
                <td><span id='ownx'></span></td>
            </tr>
            <tr>
                <td>No. of Users :</td>
                <td><span id="users"></span></td>
            </tr>
            <tr>
                <td>Usage/Connections :</td>
                <td><span id="ucon"></span></td>
            </tr>
            <tr>
            	<td>Mode :</td>
        		<td><button></button></td>
        	  </tr>
        </table>
        <form>
            IP Address: <input type="text" name="ipx"/>
            <input type="submit" value="Add"/>
        </form>
        <table id='xusers'>
            <caption>OPENVPN SERVER STATISTICS</caption>
            <tr>
                <th>#</th>
                <th>User</th>
                <th>Sent</th>
                <th>Received</th>
            </tr>
        </table>
    </div>
        <div>Coded by : 
        		<a href="https://fb.me/theMovesFever">Dexter Cellona Banawon</a> (<a href="https://www.phcorner.net/members/575916/">JustPlay</a>)
        </div>
</body>
<script src="scriptx.js"></script>
</html>