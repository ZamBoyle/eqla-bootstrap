<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>htmlentities</title>
</head>

<body>
    <pre>
<?php
$table = <<<EOD
<table id="tableau">
    <label for="tableau"> VOTRE TABLEAU (avec entête) !</label>
    <tr>
        <th role="columnheader" scope="col"> Nom </th>
        <th role="columnheader" scope="col"> Prénom </th>
        <th role="columnheader" scope="col"> Age </th>
    </tr>
    <tr>
        <td> Jacques </td>
        <td> Véronique </td>
        <td> 42 </td>
    </tr>
    <tr>
        <td> Piette </td>
        <td> Johnny </td>
        <td> 47 </td>
    </tr>
    <tr>
        <td> Piette Jacques </td>
        <td> Gabriel </td>
        <td> 6 </td>
    </tr>
</table>
EOD;
echo htmlentities($table);
?>
</pre>
</body>

</html>