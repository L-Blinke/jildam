@extends('layouts.app')

@section('scripts')
    <script src="assets/vendor/alertify/alertify.min.js"></script>
    <script src="assets/vendor/vex/vex.js"></script>
    <script src="assets/vendor/vex/vex.combined.min.js"></script>
    <script src="assets/vendor/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="js/inicio.js"></script>
@endsection

@section('stylesheets')
    <link rel="stylesheet" href="assets/vendor/vex/vex.css">
    <link rel="stylesheet" href="assets/vendor/vex/vex-theme-default.css">
    <link rel="stylesheet" href="assets/vendor/alertify/alertify.min.css"/>
    <link rel="stylesheet" href="assets/vendor/alertify/alertify-theme-default.min.css"/>
    <link rel="stylesheet" href="assets/vendor/sweetalert2/sweetalert2.min.css">
@endsection



@section('bodyOnLoad', 'inicioEvent()')

@section('body')
    <section id="optionsMenu" class="flex-column">
        <div id="menuBase">
            <div class="opcionElegida w-100">
                <form class="MenuOpcions__base " id="bienvenida">
                    <h2>Bienvenido, {{ Auth::user()->name }}</h2>
                </form>
            </div>
            <div class="opcionMenu logged d-flex justify-content-around" id="logedOpcionMenu">
                <div class="opcionMenu logged d-flex justify-content-around" id="loged" style="border: none;">
                    <button class="btn btn-primary text-center managePasswords" id="opUser1">Gestionar Contraseñas</button>
                    <button class="btn btn-primary text-center manageProfile" id="opUser2">Perfil</button>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footerClass', 'w-100')

@section('footerStyle', 'padding-bottom: 23em; margin-top: -3em;')
