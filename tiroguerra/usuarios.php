<?php
  session_start();
  if (!isset($_SESSION['user'])) 
     Header("Location: ./login.html");
include "cabecalho.html";
include "frmCadastroUsuario.html";