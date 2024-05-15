<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // show product first page
    // public function index(){
    //     return view('products.index');
    // }

    // show create form
    public function create(){
        return view('products.create');
    }

    // this method will store product in db
    public function store(){
    
    }

    // will show product edit product page
    public function edit(){

    }

    // will update a product 
    public function update(){

    } 

    // this method will delete a product
    public function destroy(){

    }




}
