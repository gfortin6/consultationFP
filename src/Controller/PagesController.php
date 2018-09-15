<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\View\Helper\FlashHelper;
use Cake\Validation\Validator;
use Cake\Mailer\Email;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    var $helpers = array('Html', 'Form');
    
    
    public function home(){        
    }
    
    
    public function contact()
    {
        $errors = null;
        if (! empty($this->request->data)) {
            
            if ($this->validateCaptcha($this->request->data['g-recaptcha-response'])) {
                $errors = $this->validateForm();
                if (empty($errors)) { // as usual data save call
                    $donnees = $this->request->data;
                    $from = $donnees['email'];
                    $to = 'gfortin6@gmail.com';
                    $subject = "Demande d'information";
                    
                    $headers = 'MIME-Version: 1.0' . "\r\n";
                    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                    $headers .= 'From: ' . strip_tags($from) . "\r\n" . 'Reply-To: ' . strip_tags($from) . "\r\n";
                    
                    
                    $message = "<html><body>
                     <h3>Formulaire contactez-nous </h3>".
                     "<p>Prénom : " . strip_tags($donnees["firstName"]) . "</p>" .
                     "<p>Nom : " . strip_tags($donnees["lastName"]) . "</p>" .
                     "<p>Téléphone : " . strip_tags($donnees["phoneNumber"]) . "</p>" .
                     "<p>Nom de l'entreprise : " . strip_tags($donnees["company"]) . "</p><hr>" .
                     "<p>".strip_tags($donnees["message"]) . "</p><hr>" .
                     "<p>***Cette notification est dû à l'envoie du formulaire «contactez-nous» du site fortinpomerleau.ca </p></body></html>";
                    
                    mail($to, $subject, $message, $headers);
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
       $this->redirect("/#contact");
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
    
    
    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    /*public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }*/
}
