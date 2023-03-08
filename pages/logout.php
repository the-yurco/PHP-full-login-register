<?php

// This starts a new session or resumes an existing one. It is required before you can manipulate the session data.
session_start();
// This will remove all session data
session_unset();
// This function destroys all of the data associated with the current session
session_destroy();

header("Location: ../login/index.php");
exit();
