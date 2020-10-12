<?php
namespace Eduardom\SenderGlobal;

class SenderGlobalManager
{
    public function transactional(){
        $client = new Api\Transactional();
        return $client->setFromName(config('senderglobal.api_from_name'))
                        ->setEmailReply(config('senderglobal.api_reply_email'))
                        ->setId(config('senderglobal.api_id'))
                        ->setUser(config('senderglobal.api_user'))
                        ->setPass(config('senderglobal.api_pass'))
                        ->setIdAccount(config('senderglobal.api_id_account'))
                        ->setUrlApi(config('senderglobal.api_url'));
    }

    public function abandonedCart(){
        return new Api\AbandonedCart();
    }

    public function pixel(){
        return new Api\Pixel();
    }

 

}