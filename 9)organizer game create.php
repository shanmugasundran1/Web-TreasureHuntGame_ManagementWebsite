
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
        <a class="cc" href="logout organizer.php">LOGOUT</a>
       
        <h1 id="mainh1">SHROOVS' HUNT<br>
            <p1 id="mainp1">“Good men mean well. We just don’t always end up doing well.”</p1>
        </h1>
        <br>
    </header>

    <div id="grwrapper">
        <h2 id="grtitleRegistration">GAME CREATE FORM</h2>
        <form action="addGame.php" method="post">
            <fieldset id="gruserInformation">
                <legend class="grlegend">Team Information</legend>
                <div class="grdivInformation">
                    <label class="grlabel" for="username">GAME NAME:<span class="required"></span></label>
                    <input type="text" id="grusername" class="grinput" placeholder="" autocomplete="off" autofocus="autofocus" name="name" required/>
                   <br> <span class="required"></span><font color = '#FFAA1D'>* GAME NAME CANNOT BE CHANGED ONCE ADDED!!</font>
                </div>
                <div class="grdivInformation">
                    <label class="grlabel" for="firstName">DESCRIPTION:&nbsp;<span class="required"></label>
                    <input type="text" id="grfirstName" class="grinput" placeholder="" autocomplete="off" name="description" required/>
                </div>

                <div class="grdivInformation">
                    <label class="grlabel" for="lastName">MAX NO. OF TEAMS:<span class="required"></label>
                    <input type="number" id="grlastName" class="grinput" placeholder="" autocomplete="off" name="teams" required/>

                </div>

                <div class="grdivInformation">
                    <label class="grlabel" for="email">DATE OF GAME:<span class="required"></label>
                    <input type="date" id="gremail" class="grinput" placeholder="" autocomplete="off" name="date" required/>

                </div>

                <div class="grdivInformation">
                    <label class="grlabel" for="password">E-MAIL:<span class="required"></label>
                    <input type="email" id="grpassword" class="grinput" placeholder="" autocomplete="off" name="email" required/>
                </div>

                <div class="grdivInformation">
                    <label class="grlabel" for="confirmPassword">TIME:<span class="required"></label>
                    <input type="time" id="grconfirmPassword" class="grinput" placeholder="" autocomplete="off" name="time" required/>
                </div>
                <input type="submit" name="submit" value="submit" id="grnextStepBtn" ><br>
               
            </fieldset>
            
            <br>
        </form>
    </div>

</body>

</html>