<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
    
  //Variaveis de POST, Alterar somente se necessário 
    //====================================================
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $mensagem = $_POST['mensagem'];
        
    //====================================================
    // Mensagem 
     
    //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
    //==================================================== 
    $email_remetente = "ambiental.opcao@gmail.com"; // deve ser uma conta de email do seu dominio 
    //====================================================
    
    //Configurações do email, ajustar conforme necessidade
    //==================================================== 
    $email_destinatario = "ambiental.opcao@gmail.com"; // pode ser qualquer email que receberá as mensagens
    //$email_reply = "$email"; 
    $email_assunto = "Contato do Site"; // Este será o assunto da mensagem
    //====================================================
    
    //Monta o Corpo da Mensagem
    //====================================================
    $email_conteudo = "Nome = $nome \n"; 
    $email_conteudo .= "Email = $email \n";
    $email_conteudo .= "Celular = $celular \n"; 
    $email_conteudo .= "$mensagem \n"; 
    //====================================================
    
    //Seta os Headers (Alterar somente caso necessario) 
    //==================================================== 
    $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
    //====================================================
    
    //Enviando o email 
    //==================================================== 
     if(isset($email_destinatario)){
        mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers);
        
     }

    } 
   
   
   echo "<script type = 'text/javascript'> location.href ='https://opcaoambiental.com.br'</script>";  
           
?>  
 