***REMOVED***
    session_start();
    include_once 'connect.php';

    $qArray = array("Platicame de Ti", "¿Que es lo que te disgusta?", "Series Favoritas", "Peliculas Favoritas", 
                    "Equipos Favoritos", "Musica Favorita", "¿Cual ha sido un buen recuerdo Navideño para ti?", "Si Fueras un <b>Meme</b>, ¿Cual serias?");
***REMOVED***

<div class="mdl-card__title header-5"></div>
<div class="mdl-card__title header-title">
    <h2 class="mdl-card__title-text">Edita tu Información</h2>
</div>
<div class="mdl-card__supporting-text">
    <h1>Questionario Navideño</h1>
    <form id="form-update" action="***REMOVED*** echo $_SERVER['PHP_SELF'];***REMOVED***" method="post" class="mdl-grid">

        ***REMOVED***
            if($success) {
                $sql = "SELECT q.Q1, q.Q2, q.Q3, q.Q4, q.Q5, q.Q6, q.Q7, s.Inter FROM Questions q JOIN Santa s ON q.ID = s.ID WHERE q.ID = ". $_SESSION["user_id"] .";";
                $result = mysqli_query($con, $sql);
                
                if(mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_array($result, MYSQLI_NUM);

                    for($i = 0; $i < 7; $i++) {
                        echo '<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell mdl-cell--12-col">
                                <input class="mdl-textfield__input" type="text" name="reg_question_'.($i + 1).'" value="'.$row[$i].'" pattern=".{0,255}">
                                <label class="mdl-textfield__label" for="reg_question_'.($i + 1).'">'.$qArray[$i].'</label>
                                <span class="mdl-textfield__error">Manten tu descripción menor a 255 carácteres.</span>
                            </div>';
                ***REMOVED***
                    if($row[7] == 1) {
                        $check = "checked";
                ***REMOVED***
                ***REMOVED***
                        $check = "";
                ***REMOVED***

                    echo '<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="inter_switch">
                            <input type="checkbox" id="inter_switch" name="inter_switch" class="mdl-switch__input" '.$check.'>
                            <span class="mdl-switch__label">Quiero participar en el <b>Intercambio de Regalos</b>.</span>
                        </label>';
            ***REMOVED***
            ***REMOVED***
                    echo '<p>Query: '.$sql.'</p><br>';
                    echo '<p style="color:red">Result: '.mysqli_num_rows($result).'</p>';
                    echo '<p style="color:red">Error: '.mysqli_error($con).'</p>';
            ***REMOVED***
                mysqli_close($con);
        ***REMOVED***
        ***REMOVED***
                echo '<p style="color:red">Error :)</p>';
                mysqli_close($con);
        ***REMOVED***
        ***REMOVED***
    </form>
</div>