<?php
namespace App\Controllers;

use Core\Controller;
class ProductCotronller extends Controller
{
    public function index(): void
    {
        $this->view('products/index');
    }


}