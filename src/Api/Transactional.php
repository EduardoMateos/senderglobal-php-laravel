<?php
namespace Eduardom\SenderGlobal\Api;

/*
* Class to send mail transactional
*/

class Transactional extends Client
{

    protected $_emailRecipient;
    protected $_fromName;
    protected $_subject;
    protected $_content;
    protected $_emailReply;
    protected $_id;
    protected $_user;
    protected $_pass;
    protected $_idAccount;
    protected $_urlApi;

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

     /**
     * Set sender name
     *
     * @param string $fromName
     * @return $this
     */
    public function setFromName($fromName)
    {
        $this->_fromName = $fromName;
        return $this;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->_subject = $subject;
        return $this;
    }

     /**
     * Set content mail
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->_content = $content;
        return $this;
    }

    /**
     * Set email to reply
     *
     * @param string $emailReply
     * @return $this
     */
    public function setEmailReply($emailReply)
    {
        $this->_emailReply = $emailReply;
        return $this;
    }


    /**
     * internal id provider by senderglobal
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }

    /**
     * internal user provider by senderglobal
     *
     * @param string $id
     * @return $this
     */
    public function setUser($user)
    {
        $this->_user = $user;
        return $this;
    }


    /**
     * internal pass provider by senderglobal
     *
     * @param string $pass
     * @return $this
     */
    public function setPass($pass)
    {
        $this->_pass = $pass;
        return $this;
    }

    /**
     * internal id account provider by senderglobal
     *
     * @param string $id
     * @return $this
     */
    public function setIdAccount($id)
    {
        $this->_idAccount = $id;
        return $this;
    }


    /**
     * url api provider by senderglobal
     *
     * @param string $id
     * @return $this
     */
    public function setUrlApi($url)
    {
        $this->_urlApi = $url;
        return $this;
    }

    /**
     * send mail transactional
     *
     * @return $response
     */
    public function send()
    {
        $params = [
           'id' => $this->_id,
           'user' => $this->_user,
           'pass' => $this->_pass,
           'from_name' => $this->_fromName,
           'to' => $this->_emailRecipient,
           'asunto' => $this->_subject,
           'html' => $this->_content,
           'id_cuenta' => $this->_idAccount,
           'reply' => $this->_emailReply,
        ];

        return $this->get($params, $this->_urlApi);
    }

}