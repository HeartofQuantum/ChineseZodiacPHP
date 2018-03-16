<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Source Code</title>
</head>
<body>
    <?php
        if (isset($_GET['source_file']))
        {
            $SourceFile = file_get_contents(
                stripslashes($_GET['source_file']));
            highlight_string($SourceFile);
        }
        else 
            echo"<p>No source file name entered.</p>\n";
    ?>
</body>
</html>
