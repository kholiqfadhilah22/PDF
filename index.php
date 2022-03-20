<?php
if (isset($_GET['path'])) {
    $pdf_file = $_GET["path"];
    $pdf_scrape = 'https://media.neliti.com/media/publications/'.$pdf_file;
    $filename = $pdf_file;
    header('Content-Type:application/pdf');
    header('Content-Disposition:inline;filename="'.$filename.'"');
    header('Content-Transfer-Encoding:binary');
    header('Content-Encoding:gzip');
    header('Accept-Ranges:bytes');
    @readfile($pdf_scrape);
} else { ?>
<html>
    <head>
        <title>Hello world</title>
    </head>
    <body>
        <p>Hello world!</p>
    </body>
</html>
<?php
}
?>
