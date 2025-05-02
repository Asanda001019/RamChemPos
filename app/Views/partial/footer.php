<html>
<html lang="<?= current_language_code() ?>">
    
<head>
    <style>
        html, body {
    height: 100%;
    margin: 0;
    padding: 0;
}

.wrapper {
    min-height: 100%;
    display: flex;
    flex-direction: column;
}

.container {
    flex: 1;
}

#footer {
    margin-top: auto;
}

.jumbotron.push-spaces {
    margin: 0;
    padding: 1rem;
    background-color:rgb(36, 163, 74);
    text-align: center;
    color: white;
}

        </style>
</head>

<?php

use Config\OSPOS;

?>
</div>
        </div>

        <div id="footer">
            <div class="jumbotron push-spaces">

            <strong>&copy; <?= date('Y') ?> Ramchemical Ltd. All rights reserved. · 
<a href="https://ramchemical.example.com" target="_blank">Visit our website</a></strong>

            </div>
        </div>
    </body>
</html>
