<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;
use App\Models\Page;

class SitemapXmlController extends Controller
{
    public function index() {
        $posts = Service::orderBy('id', 'desc')->get();
        $pages = Page::orderBy('id', 'desc')->get();
        return response()->view('frontend.pages.sitemap', compact('posts', 'pages'))->header('Content-Type', 'text/xml');
      }
}