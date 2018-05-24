<?php
    $textToEncrypt = '';
    $encryptedText = '';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Encryption
        </title>
        <style type="text/css">
            <?php include('css/main.css'); ?>
        </style>
    </head>
    <body>
        <div class="main">
            <?php
                include('library.php');
            ?>
            <div class="firstBorn">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <table>
                        <tr>
                            <td>
                                <p class="head">Text to encrypt</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="textToEncrypt"><?php echo $textToEncrypt; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="head">Encrypted text</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="encryptedText"><?php echo $encryptedText; ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:right;">
                                <input type="submit" value="Encrypt" class="submitButton" name="encrypt" />
                                <input type="submit" value="Decrypt" class="submitButton" name="decrypt" />
                            </td>
                        </tr>
                    </table>
                </form>
                <div class="output">

                </div>
            </div>
        </div>
    </body>
</html>
