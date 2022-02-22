<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('/') }}/logo-pendek-kolakaupdate1.png">
  <link rel="icon" type="image/png" href="{{ url('/') }}/logo-pendek-kolakaupdate1.png">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Kolaka Update</title>
  {{-- <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('logo.png') }}"> --}}
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ url('/') }}/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="{{ url('/') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ url('/') }}/assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
<style>
    .user-profil {
      position: absolute !important;
      right: 5% !important;
      left: auto !important;
      background: #f2f4f5;
      text-align: center
    }
</style>
  @yield('styles')
  @yield('styles1')
  @include('sweetalert::alert')
  @livewireScripts
