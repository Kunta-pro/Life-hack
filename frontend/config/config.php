<?php
require 'vendor/autoload.php';

use Supabase\Client;

$supabaseUrl = 'https://mokqpjrqgjlekuhybclo.supabase.co';
$supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Im1va3FwanJxZ2psZWt1aHliY2xvIiwicm9sZSI6ImFub24iLCJpYXQiOjE3MzAzMDYxOTAsImV4cCI6MjA0NTg4MjE5MH0.ziVCEj_ZxOLg49_srT-BWPlOhzm70ZMTZc64l-n5LSU';

$supabase = new Client($supabaseUrl, $supabaseKey);
