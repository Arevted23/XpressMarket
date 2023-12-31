<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- *** IMPORT OF FOLDER BUILD WITH SASS AND JS *** -->
    <!-- <link rel="stylesheet" href="/build/css/app.css"> -->

    <!-- *** IMPORT OF ARCHIVE BUILD WITH CSS (CSS/NORMALIZE) *** -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <title>XpressMarket</title>
</head>

<body>


    <div class="img-header">
        <nav class="navbar">
            <a href="../../">
                <img class="logo-img" src="/img/header/f9844ca152564e159cbd0b62f74a380b-removebg-preview.png" alt="logo">
            </a>
            <div class="navbar-derecha">
                <?php if ($auth === false) { ?>
                    <a href="">
                        <input class="input-class" type="text" placeholder="¡Encuentra Respuesta aqui!">
                    </a>
                    <a href="">
                        <button class="btn-buscar">Buscar</button>
                    </a>
                    <a class="user-link" href="#">Departamentos</a>
                    <a class="user-link" href="#">Sucursales</a>
                    <a class="user-link" href="account.php">
                        <svg class="p-svg" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                            <g>
                                <rect fill="none" height="24" width="24" />
                            </g>
                            <g>
                                <g>
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.35 18.5C8.66 17.56 10.26 17 12 17s3.34.56 4.65 1.5c-1.31.94-2.91 1.5-4.65 1.5s-3.34-.56-4.65-1.5zm10.79-1.38C16.45 15.8 14.32 15 12 15s-4.45.8-6.14 2.12C4.7 15.73 4 13.95 4 12c0-4.42 3.58-8 8-8s8 3.58 8 8c0 1.95-.7 3.73-1.86 5.12z" />
                                    <path d="M12 6c-1.93 0-3.5 1.57-3.5 3.5S10.07 13 12 13s3.5-1.57 3.5-3.5S13.93 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z" />
                                </g>
                            </g>
                        </svg>
                        <span class="li-svg">Mi cuenta</span>
                    </a>
                <?php } else {  ?>
                    <a class="user-link" href="#">Modificar Cuenta</a>
                    <a class="user-link" href="#">Necesita Factura</a>
                    <a class="user-link" href="#">Configuracion de Notificaciones</a>
                    <a class="user-link" href="#">Informacion de Pago</a>
                    <a class="user-link" href="/">Cerrar Sesion</a>
                <?php } ?>

                <?php if ($auth === false || true) { ?>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                        </svg>
                    </a>
                <?php } ?>
            </div>
        </nav>

        <!-- <nav>
            <ul class="navbar">
                <li>
                    <a href="../../index.php"><img class="logo-img" src="/img/header/f9844ca152564e159cbd0b62f74a380b-removebg-preview.png" alt="logo"></a>
                </li>

                <li class="li-input"><input class="input-class" type="text" placeholder="¡Encuentra Respuesta aqui!"></li>

                <li class="li-button"><button class="btn-buscar">Buscar</button></li>

                <li class="li-link">
                    <a class="user-link" href="account.php">
                    
                        <svg class="p-svg" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                            <g>
                                <rect fill="none" height="24" width="24" />
                            </g>
                            <g>
                                <g>
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.35 18.5C8.66 17.56 10.26 17 12 17s3.34.56 4.65 1.5c-1.31.94-2.91 1.5-4.65 1.5s-3.34-.56-4.65-1.5zm10.79-1.38C16.45 15.8 14.32 15 12 15s-4.45.8-6.14 2.12C4.7 15.73 4 13.95 4 12c0-4.42 3.58-8 8-8s8 3.58 8 8c0 1.95-.7 3.73-1.86 5.12z" />
                                    <path d="M12 6c-1.93 0-3.5 1.57-3.5 3.5S10.07 13 12 13s3.5-1.57 3.5-3.5S13.93 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z" />
                                </g>
                            </g>
                        </svg>  
                    <span class="li-svg">Mi cuenta</span>
                    </a>
                </li>

                <?php if ($auth === false) { ?>
                    <li class="li-departamento"><a class="user-link" href="#">Departamentos</a></li>
                    <li class="li-departamento"><a class="user-link" href="#">Sucursales</a></li>
                <?php } else {  ?>
                    <li class="li-departamento"><a class="user-link" href="#">Modificar Cuenta</a></li>
                    <li class="li-departamento"><a class="user-link" href="#">Necesita Factura</a></li>
                    <li class="li-departamento"><a class="user-link" href="#">Configuracion de Notificaciones</a></li>
                    <li class="li-departamento"><a class="user-link" href="#">Informacion de Pago</a></li>
                    <li class="li-departamento"><a class="user-link" href="/">Cerrar Sesion</a></li>
                <?php } ?>


                <li class="li-carrito"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                        </svg></a></a>
                </li>
            </ul>
        </nav> -->

        <div class="align-ph">
            <p class="design-l">¡Toda la mejor calidad aqui!</p>
            <h1 class="design-l">XpressMarket</h1>
            <p class="design-2">Visita tu SuperMercado de confianza en donde podras encontrar</p>
            <p class="design-2">todos los productos que tengas en mente, con los mejores precio</p>
            <p class="design-2">y sobre todo con la mejor experiencia de compra</p>
        </div>
    </div>