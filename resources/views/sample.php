<!doctype html>
<html>
<head>
    <title>Sample</title>
    <style>
    body { color:gray; }
    h1 { font-size:18pt; font-weight:bold; }
    </style>
</head>
<body>
    <h1>Sample</h1>
    <p><?php print_r($message); ?></p>

    <form method="post" action="/helo">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="text" name="str">
        <input type="submit">
    </form>
</body>
