<?php
// Auto carga las clases
require_once 'vendor/autoload.php';

// relaciona los namespaces con las clases
use models\{Head, Header, Footer};

$head = new Head(

    'es',
    'UTF-8',
    'pruebas',
    'ESTO ES LA DESCRIPCION DE LA PAGINA',
    'http://',
    'http://'
);

$head->printHead();

?>

<body>

<!-- HEADER -->

<?php

$header = new Header(
    'img/svg/logo.svg',
    'logotipo de la marca'
);

$header->printHeader();

?>


<!-- ************************** -->

<!-- CONTENIDO -->
<h1>HOLA TODO FUNCIONA BIEN, SALGO PORQUE ERES UN CRUCK Y HAN MUERTO 20000 NEURONAS DE TU CABEZA PARA QUE PUDIERA SALIR</h1>

<!-- ************************** -->

<!-- FOOTER -->


<?php

$footer = new Footer (
    
    'img/svg/logo.svg',
    '971 745 894','689 234 111',
    'info@empresa.com',
    'LOGOTIPO',
    'Adv. Joan March, 134 - 07620 - Palma de Mallorca'
);

$footer->printFooter();

?>

<!-- ************************** -->

</body>

</html>