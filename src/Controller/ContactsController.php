<?php

/**
 * (Sample) Controller for Showing the use of Captcha*
 * @author     Arvind Kumar (arvind.mailto@gmail.com)
 * @link       http://www.devarticles.in/
 * @copyright  Copyright © 2013 http://www.devarticles.in/
 * @version Tested OK in Cakephp 2.4.1
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\View\Helper\FlashHelper;
use Cake\Validation\Validator;

class ContactsController extends AppController
{

    var $name = 'Contacts';

    var $helpers = array(
        'Html',
        'Form'
    );

    public function contact()
    {
        $errors = null;
        if (! empty($this->request->data)) {
            
           // if ($this->validateCaptcha($this->request->data['g-recaptcha-response'])) {
            if(true){
                $errors = $this->validateForm();
                if (empty($errors)) { // as usual data save call
                    var_dump($this->request->data);
                    $donnees = $this->request->data;
                    $from = 'From: ' . $donnees['email'];
                    $to = 'gfortin6@gmail.com';
                    $subject = "Demande d'information";
                    
                    $headers = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                    $headers .= 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion();
                    
                    $body = "Formulaire «contactez-nous»" . "<br>" . "<br>" . "Prénom : «" . $donnees["firstName"] . "»<br>" . "Nom : «" . $donnees["lastName"] . "»<br>" . "Téléphone : «" . $donnees["phoneNumber"] . "»<br>" . "Nom de l'entreprise : «" . $donnees["company"] . "»<br>" . "<hr>" . $donnees["message"] . "<hr>" . "<br>" . "***Cette notification est dû à l'envoie du formulaire «contactez-nous» du site e-3.ca";
                    var_dump($body);
                    die();
                    mail($to, $subject, $body, $headers);
                    $this->Flash->set(__('Votre message a bien été envoyé.'), array(
                        'class' => 'notice success'
                    ));
                } else { // or
                    $this->set('errors', $errors);
                    
                    $this->Flash->set(__("Erreurs présentes"), array(
                        'class' => 'cake-error'
                    ));
                }
            } else { // or
                $this->Flash->set(__("Erreurs présentes"), array(
                    'class' => 'cake-error'
                ));
            }
        }
        $this->render("/Pages/home");
    }

    private function validateForm()
    {
        $validator = new Validator();
        $validator
        ->add('email', 'validFormat', [
            'rule' => 'email',
            'message' => __("Le format du courriel est invalide")
        ])
        ->notEmpty([
            'firstName' => [
                'message' => __("Ce champ ne peut être vide."),
            ],
            'lastName' => [
                'message' => __("Ce champ ne peut être vide."),
            ],
            'email' => [
                'message' => __("Ce champ ne peut être vide."),
            ],
            'message' => [
                'message' => __("Ce champ ne peut être vide."),
            ]]);
        
        $errors = $validator->errors($this->request->getData());
        var_dump($errors);
        return $errors;
    }

    private function validateCaptcha($response)
    {
        $private = Configure::read('captcha.private');
        $captchaData = array(
            'secret' => urlencode(Configure::read('captcha.private')),
            'response' => urlencode($response),
            'remoteip' => urlencode($_SERVER["REMOTE_ADDR"])
        );
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $captchaData);
        $httpResponse = curl_exec($ch);
        curl_close($ch);
        
        return json_decode($httpResponse)->success;
    }
}
