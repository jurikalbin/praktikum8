<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Kodune 8</title>
    <?php
    $default_text="Muuda teksti siin!!!";
    $bg_col="#FFFFFF"; // vaikimisi valge
    $txt_col="#000000"; // vaikimisi must
    $border_line=1;
    $border_style="None";
    $border_color="#0000CC";
    $border_radius=1;

    if (isset($_POST['text']) && $_POST['text']!="") {
        $default_text = htmlspecialchars($_POST['text']);
    }
    if (isset($_POST['bg_color']) && $_POST['bg_color']!="") {
        $bg_col = htmlspecialchars($_POST['bg_color']);
    }
    if (isset($_POST['txt_color']) && $_POST['txt_color']!="") {
        $txt_col=htmlspecialchars($_POST['txt_color']);
    }
    if (isset($_POST['line_with']) && $_POST['line_with']!="") {
        $border_line=htmlspecialchars($_POST['line_with']);
    }
    if (isset($_POST['line_style']) && $_POST['line_style']!="") {
        $border_style=htmlspecialchars($_POST['line_style']);
    }
    if (isset($_POST['line_color']) && $_POST['line_color']!="") {
        $border_color=htmlspecialchars($_POST['line_color']);
    }
    if (isset($_POST['line_radius']) && $_POST['line_radius']!="") {
        $border_radius=htmlspecialchars($_POST['line_radius']);
    }
    ?>
	<style type="text/css">
		p {
			background-color: <?php echo $bg_col; ?>;
            color: <?php echo $txt_col; ?>;
            border-style: <?php echo $border_style; ?>;
            border-width: <?php echo $border_line; ?>px;
            border-color: <?php echo $border_color; ?>;
            border-radius: <?php echo $border_radius; ?>px;
		}
	</style>
</head>
<body>

<p><?php echo $default_text; ?></p>
<hr>
<form method="POST" action="change_style.php">
    <textarea name="text"><?php echo $default_text; ?></textarea><br/>
	<input type="color" name="bg_color" value=<?php echo $bg_col; ?>> Taustavärv<br/>
	<input type="color" name="txt_color" value=<?php echo $txt_col; ?>> Tekstivärv<br/>

	<fieldset>
		<legend>Piirjoon:</legend>
			<input type="number" name="line_with" min="1" max="20" value="<?php echo $border_line; ?>"> Piirjoone laius (0-20px)<br/>
			<!--<input type="range"  value="3" min="1" max="20"><br/>-->
			<select name="line_style">
                <option value="<?php echo $border_style; ?>" selected><?php echo $border_style; ?></option>
				<option value="None">None</option>
				<option value="Solid">Solid</option>
				<option value="Dotted">Dotted</option>
                <option value="Double">Double</option>
			</select> Tabeli joon<br/>
			<input type="color" name="line_color" value=<?php echo $border_color; ?>> Piirjoone värv<br/>
			<input type="number" name="line_radius" min="1" max="100" value=<?php echo $border_radius; ?>> Piirjoone nurga raadius (0-100px)<br/>
	</fieldset>
	<button type="submit">Uuenda</button>
</form>



</body>
</html>