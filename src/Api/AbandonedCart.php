<?php
namespace Eduardom\SenderGlobal\Api;

/*
* Class to send abandoned cart to user
*/

class AbandonedCart extends Client
{
    protected $_user;
    protected $_pass;
    protected $_baseCode;
    protected $_emailRecipient;
    protected $_source;
    protected $_template;
    protected $_date;
    protected $_products;
    protected $_urlApi;

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
     * base code provider by senderglobal
     *
     * @param string $baseCode
     * @return $this
     */
    public function setBaseCode($baseCode)
    {
        $this->_baseCode = $baseCode;
        return $this;
    }


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
     * template language ES / US / FR / ETC.
     *
     * @param string $pass
     * @return $this
     */
    public function setSource($source)
    {
        $this->_source = $source;
        return $this;
    }

    /**
     * senderglobal mail template ID
     *
     * @param string $pass
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->_template = $template;
        return $this;
    }

    /**
     * date to send abandoned cart
     *
     * @param string $pass
     * @return $this
     */
    public function setDate($date)
    {
        $this->_date = $date;
        return $this;
    }

    /**
     * products to send
     *
     * @param string $pass
     * @return $this
     */
    public function setProducts($products)
    {
        $this->_products = $products;
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

    public function send()
    {
        $params = [
          'user' => $this->_user,
          'pass' => $this->_pass,
          'basecode' => $this->_baseCode,
          'to' => $this->_emailRecipient,
          'source' => $this->_source,
          'plantilla' => $this->_template,
          'fecha' => $this->_date,
          'data' => json_encode($this->_products),
        ];

        return $this->get($params, $this->_urlApi);
    }
}