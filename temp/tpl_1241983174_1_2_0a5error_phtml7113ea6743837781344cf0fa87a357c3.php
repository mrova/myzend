<?php 
function tpl_1241983174_1_2_0a5error_phtml7113ea6743837781344cf0fa87a357c3( $tpl, $ctx ) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
$ctx->setDocType('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"; "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd>') ;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Zend Framework Default Application</title>
</head>
<body>
  <h1>An error occurred</h1>
  <h2><?php echo phptal_escape($ctx->message) ?></h2>
  <? if ('development' == APPLICATION_ENV): ?>
  <?php if ($ctx->APPLICATION_ENV $ctx->eg string:development): ; ?>

  <h3>Exception information:</h3>
  <p>
      <b>Message:</b> <span><?php echo phptal_escape($ctx->exception->getMessage()) ?></span>
  </p>

  <h3>Stack trace:</h3>
  <pre><?php echo phptal_escape($ctx->exception->getTraceAsString()) ?></pre>

  <h3>Request Parameters:</h3>
  <pre>
  <? var_dump($ctx->request->getParams()) ?>
  </pre>
  <?php endif; ?>

</body>
</html><?php 
}

 ?><?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from C:\Users\user\www\myzend\application\views\scripts\error\error.phtml (edit that file instead) */; ?>