<?php 
$user_session = session();

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>POS - CDP</title>
        <link href="<?php echo base_url(); ?>/css/style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/css/styles.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
        <script src="<?php echo base_url(); ?>/js/all.js"></script>
        <!-- <script src="<?php echo base_url(); ?>/js/jquery-3.6.1.min.js"></script> --> 
        <script src="<?php echo base_url(); ?>/js/jquery-ui/external/jquery/jquery.js"></script>     
        <script src="<?php echo base_url(); ?>/js/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>/js/chart.js"></script>
        <script src="<?php echo base_url(); ?>/js/chart.umd.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>-->
    </head>
    
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-warning">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="<?php echo base_url(); ?>/inicio">POS-CDP</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto me-3 me-lg-4 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $user_session->nombre;?><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>/usuarios/cambia_password">Cambiar contraseña</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>/usuarios/logout">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-white" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-basket-shopping"></i></div>
                                Productos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url(); ?>/productos">Productos</a>
                                    <a class="nav-link" href="<?php echo base_url(); ?>/unidades">Unidades</a>
                                    <a class="nav-link" href="<?php echo base_url(); ?>/categorias">Categorías</a>
                                </nav>
                            </div>

                            <a class="nav-link" href="<?php echo base_url(); ?>/clientes"><div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>Clientes</a>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#menuCompras" aria-expanded="false" aria-controls="menuCompras">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-truck"></i></div>
                                Compras
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="menuCompras" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url(); ?>/compras/nuevo">Nueva compra</a>
                                    <a class="nav-link" href="<?php echo base_url(); ?>/compras">Compras</a>
                                </nav>
                            </div>

                            <a class="nav-link" href="<?php echo base_url(); ?>/ventas/venta"><div class="sb-nav-link-icon"><i class="fa-solid fa-cash-register"></i></div>Caja</a>

                            <a class="nav-link" href="<?php echo base_url(); ?>/ventas"><div class="sb-nav-link-icon"><i class="fa-solid fa-shopping-cart"></i></div>Ventas</a>
                        
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#menuReportes" aria-expanded="false" aria-controls="menuReportes">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-list"></i></div>
                                Reportes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="menuReportes" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url(); ?>/productos/mostrarMinimos">Reporte mínimos</a>
                                    <a class="nav-link" href="<?php echo base_url(); ?>/productos/mostrarMinimosExcel">Reporte mínimos excel</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#subAdministracion" aria-expanded="false" aria-controls="subAdministracion">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                                Administración
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="subAdministracion" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo base_url(); ?>/configuracion">Configuración</a>
                                    <a class="nav-link" href="<?php echo base_url(); ?>/usuarios">Usuarios</a>
                                    <a class="nav-link" href="<?php echo base_url(); ?>/roles">Roles</a>
                                    <a class="nav-link" href="<?php echo base_url(); ?>/cajas">Cajas</a>
                                    <a class="nav-link" href="<?php echo base_url(); ?>/logs">Logs de acceso</a>

                                </nav>
                            </div>
                        </div>
                    </div>
        
                </nav>
            </div>