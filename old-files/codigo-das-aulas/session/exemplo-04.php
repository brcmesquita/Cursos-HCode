<?php

session_unset($_SESSION["nome"]); // Remove uma variável de sessão

session_unset(); // Remove todas as variáveis de sessão

session_destroy(); // Destrói a sessão / limpar todas as variáveis de sessão e remove o cookie da sessão

echo $_SESSION["nome"];