<?php
namespace App\Service;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;


class SendMailService
{
   


    public function send(
        string $from,
        string $to,
        string $subject,
        string $template,
        array $context
    ): void
    {
        //On crée le mail
        $email = (new TemplatedEmail())
            ->from($from)
            ->to($to)
            ->subject($subject)
            ->htmlTemplate("emails/$template.html.twig")
            ->context($context);

        // On envoie le mail
        
    }
}