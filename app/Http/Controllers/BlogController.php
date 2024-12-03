<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Response;

class BlogController extends Controller
{
    public function create(Request $request): Response
    {
        return Blog::render('Profile/Editsssssssss', [
            
        ]);
    }

    public function show(Request $request): Response
    {
        return Blog::render('Profile/Edit', [
            
        ]);
    }
    public function index(Request $request): Response
    {
        return Blog::render('Profile/Edit', [
            
        ]);
    }
    public function update(Request $request): Response
    {
        return Blog::render('Profile/Edit', [
            
        ]);
    }
    public function delete(Request $request): Response
    {
        return Blog::render('Profile/Edit', [
            
        ]);
    }
}
