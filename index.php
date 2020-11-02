<?php
# This function reads your DATABASE_URL config var and returns a connection
function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["postgres://tgfotlqsesxkop:8347981a2330af6e15c433302db79ab3d9ba7f7f32cd25dbabd0dff7e78f6276@ec2-54-224-175-142.compute-1.amazonaws.com:5432/dcjrfn9ert59om"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1);
}

# Here we establish the connection. Yes, that's all.
$db = pg_connect(pg_connection_string_from_database_url());

$sql = ['CREATE TABLE IF NOT EXISTS logind (USERNAME VARCHAR(100) PRIMARY KEY, EMAIL  NOT NULL UNIQUE,PASSWORD TEXT);'];

$db->execute($sql);

include_once("Homepage.html");

?>
