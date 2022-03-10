<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ORGANIZER GAME CREATE</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
</head>

<body id="grbody">

    <header id="mainheader">
        <img src="images/logo.png" alt="HOME" height="160px" weight="160px">&nbsp;
        <a class="cc" href="logout player.php">LOGOUT</a>
		
        <h1 id="mainh1">SHROOVS' HUNT<br>
            <p1 id="mainp1">“Good men mean well. We just don’t always end up doing well.”</p1>
        </h1>
        <br>
    </header>

    <div id="grwrapper">
        <h2 id="grtitleRegistration">TEAM REGISTRATION</h2>
        <form action="addteam.php" method="post">
            <fieldset id="gruserInformation">
                <legend class="grlegend">Team Information</legend>
				
                <div class="grdivInformation">
                    <label class="grlabel" for="username">TEAM NAME:</label>
                    <input type="text" id="grusername" class="grinput" placeholder="" autocomplete="off" autofocus="autofocus" name="tname" required/>
                </div>
				
                <div class="grdivInformation">
                    <label class="grlabel" for="firstName">MEMBER 1:&nbsp;</label>
                    <input type="text" id="grfirstName" class="grinput" placeholder="" autocomplete="off" name="name1" required/>
                </div>

                <div class="grdivInformation">
                    <label class="grlabel" for="lastName">MEMBER 1 E-MAIL:</label>
                    <input type="email" id="grlastName" class="grinput" placeholder="" autocomplete="off" name="contact1" required/>
                </div>

                <div class="grdivInformation">
                    <label class="grlabel" for="firstName">MEMBER 2:&nbsp;</label>
                    <input type="text" id="grpassword" class="grinput" placeholder="" autocomplete="off" name="name2" required/>
                </div>

                <div class="grdivInformation">
                    <label class="grlabel" for="lastName">MEMBER 2 E-MAIL:</label>
                    <input type="email" id="grconfirmpassword" class="grinput" placeholder="" autocomplete="off" name="contact2" required/>
                </div>
				
				<div class="grdivInformation">
                    <label class="grlabel" for="firstName">MEMBER 3:&nbsp;</label>
                    <input type="text" id="gremail" class="grinput" placeholder="" autocomplete="off" name="name3" required/>
                </div>

                <div class="grdivInformation">
                    <label class="grlabel" for="lastName">MEMBER 3 E-MAIL:</label>
                    <input type="email" id="grconfirm" class="grinput" placeholder="" autocomplete="off" name="contact3" required/>
                </div>
				
				<input type="hidden" id="grconfirm" class="grinput" placeholder="" autocomplete="off" name="regstatus" value="1" readonly />
                <div class="grdivInformation">
                    <?php
                    session_start();
                    $game = $_SESSION["gamename"];
                    echo '<input type="hidden" id="grusername" class="grinput" placeholder="" autocomplete="off" autofocus="autofocus" name="game" value="';
                    echo $game;
                    echo '">';
                    ?>  
                </div>
				
                <input type="submit" name="submit" value="submit" id="grnextStepBtn" >
            </fieldset>
            
            <br>
        </form>
    </div>

</body>

</html>
