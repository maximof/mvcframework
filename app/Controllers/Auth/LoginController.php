<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use Psr\Http\Message\RequestInterface;
use App\Wrappers\View;

class LoginController extends Controller
{
    /**
     * The view instance injected in routes.php
     *
     * @var $this
     */
    protected $view;

    /**
     * Instatiate the controller
     *
     * @param   \App\Wrappers\View     $view
     * @return  void
     */
    public function __construct(View $view)
    {
        $this->view = $view;
    }

    /**
     * Respond with the homepage.
     *
     * @param   Psr\Http\Message\RequestInterface     $request
     * @return  Zend\Diactoros\Response
     */
    public function index(RequestInterface $request)
    {
        return $this->view->render('auth/login.twig');
    }
}