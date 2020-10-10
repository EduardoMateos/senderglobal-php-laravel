<?php
namespace Eduardom\SenderGlobal;

class ApiClient
{

    protected $_emailRecipient;
    protected $_fromName;
    protected $_subject;
    protected $_content;
    protected $_reply;
    protected $_id;
    protected $_user;
    protected $_pass;

    /**
     * Set Email Recipient
     *
     * @param string $email Email Recipient
     * @return $this
     */
    public function setEmailRecipient($email)
    {
        $this->_emailRecipient = $email;
        return $this;
    }

    
    public function sendMail()
    {
 
        $parametros = [
           'id' => 'xxx',
           'user' => 'xxx',
           'pass' => 'xxx',
           'from_name' => 'xxx',
           'to' => 'xxxx',
           'asunto' => 'xxxx',
           'html' => rawurlencode('xxxx'),
           'id_cuenta' => '1',
           'reply' => 'xxx@xxx.es',
          ];

        $postfields = '';
        foreach ($parametros as $key => $value) {
            $postfields .= "{$key}={$value}&";
        }

        $postfields = rtrim($postfields, '&');
        $handler = curl_init();
        curl_setopt($handler, CURLOPT_URL, 'http://webapp.senderglobal.com/transac/transaccionales_SMTP_sndr.php');
        curl_setopt($handler, CURLOPT_POST, 1);
        curl_setopt($handler, CURLOPT_POSTFIELDS, $postfields);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handler, CURLOPT_CONNECTTIMEOUT, 0); 
        curl_setopt($handler, CURLOPT_TIMEOUT, 15);
        $res = curl_exec($handler);

        return $res;
    }

}