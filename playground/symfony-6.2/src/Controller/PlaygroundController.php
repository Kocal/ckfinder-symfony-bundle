<?php

namespace App\Controller;

use CKSource\Bundle\CKFinderBundle\Form\Type\CKFinderFileChooserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class PlaygroundController extends AbstractController
{
    public function __invoke(): Response
    {
        $form = $this->createFormBuilder()
            ->add('file_chooser1', CKFinderFileChooserType::class, [
                'label' => 'Photo',
                'button_text' => 'Browse photos',
                'button_attr' => [
                    'class' => 'my-fancy-class',
                ],
            ])
            ->getForm();

        return $this->render('playground.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
