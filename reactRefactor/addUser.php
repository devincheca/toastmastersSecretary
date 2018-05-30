<?php
  define('ADMINCODE', 'chromeElephant911');
  define('KEY', '20284538c7d678e53bff67494907fb6791c2098c0edd275f69d159f215b9f91b');
  $_POST = json_decode(file_get_contents('php://input'), true);
  if ($_POST['admincode'] == ADMINCODE) {
    $toEncrypt = array(
      'Key' => '20284538c7d678e53bff67494907fb6791c2098c0edd275f69d159f215b9f91b', 
      'Message' => $_POST['password']
    );
    //NEED TO USE CURL THROUGH PHP NOT HTTP REQUEST
    //$reqPassword = new HttpRequest('http://52.15.115.81:3000', HttpRequest::METH_POST);
    echo 'fine';}/*
    $reqPassword->addPostFields(json_encode($toEncrypt));
    try 
    {
      $resPassword = json_decode($reqPassword->send()->getBody(), true);
      $toSave = array(
        'Password' => $resPassword['EncryptedMessage'], 
        'PasswordNonce' => $resPassword['Nonce']
      );
      $toFile = fopen($_POST['username'].'.json', 'w') or die('Unable to open file!');
      fwrite($toFile, json_decode($toSave, true));
      fclose($toFile);
    }
    catch
    {
      echo 'Failed to add'.$_POST['username'].'failed.';
    }
    echo $_POST['username'].' added.';
  }
  else
  {
    echo 'Incorrect admincode.';
  }*/
?>
