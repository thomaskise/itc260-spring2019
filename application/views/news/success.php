<?php
//application/views/news/success.php
$this->load->view($this->config->item('theme') . 'header');
?>
<h1>Success!</h1>
<p>Wouldn't it be awesone if I could see the record?</p>
<?php
$this->load->view($this->config->item('theme') . 'footer');
?>