<html>
    <head>
        <title></title>
        <style>
            .fileInDir{
                margin-top: 10px;
                padding: 15px 15px 15px 15px;
                border: solid;
                background-color: seashell;
                border-radius: 5px;
            }
            h4{
                margin: 0 0;
            }
            span{
                margin-left: 5px;
            }
        </style>
    </head>
    <body>
        <form enctype="multipart/form-data" action="./index.php" method="post">
            <p><input type="file" name="upload"></p>
            <p><input type="submit" value="send"></p>
        </form>
        {block name=table}{/block}
    </body>
</html>