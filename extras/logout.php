<?php

session_start();

session_destroy();

header('Location: /phpcrash/13_sessions.php');