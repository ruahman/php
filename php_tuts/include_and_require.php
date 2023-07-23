<?php

include 'arrays.php';

// just shows a warning
include 'doesnt_exist.php';

require 'for_loops.php';

// this fires a fatal error
require 'doesnt_exist.php';
