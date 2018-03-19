<?php

namespace CommonWidget;

/**
 * Kontroler widgetów
 */
class IndexController extends \Mmi\Mvc\Controller
{

    public function init()
    {
        //inicjalizacja widgeta
        (new \Cms\CategoryController($this->getRequest()))->widgetAction();
    }

    /**
     * Galeria
     */
    public function galleryAction()
    {

    }

    /**
     * Lista załączników
     */
    public function attachmentAction()
    {

    }

    /**
     * Blok tekstowy
     */
    public function textAction()
    {

    }

}
