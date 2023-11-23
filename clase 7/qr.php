<?php

include_once("phpqrcode/qrlib.php");

QRcode::png('code data text', 'filename.png', 'L', 4, 2);