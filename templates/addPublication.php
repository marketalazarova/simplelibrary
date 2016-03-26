<?php require('../functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php _e("PUBLICATION_ADD_HTMLTITLE"); ?></title>
</head>

<body>
    <form action="../formHandler.php" method="post">
        <p>
            <label for="isbn"><strong><?php _e("PUBLICATION_ADD_ISBN"); ?></strong></label>
            <input name="isbn" type="text" size="30">
        </p>
        <p>
            <label for="title"><strong><?php _e("PUBLICATION_ADD_TITLE"); ?></strong></label>
            <input name="title" type="text" size="128">
        </p>
        <p>
            <label for="numpages"><strong><?php _e("PUBLICATION_ADD_NUMPAGES"); ?></strong></label>
            <input name="numpages" type="number" size="4">
        </p>
        <p>
            <label for="edition"><strong><?php _e("PUBLICATION_ADD_EDITION"); ?></strong></label>
            <input name="edition" type="number" size="4">
        </p>
        <p>
            <label for="published"><strong><?php _e("PUBLICATION_ADD_PUBLISHED"); ?></strong></label>
            <input name="published" type="date" size="4">
        </p>
        <input type="submit" value="<?php _e("PUBLICATION_ADD_SUBMIT"); ?>">
    </form>
</body>
</html>
