<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $post = [
            'title' => '我是一匹来自北方的哈士奇',
            'body' => '<p>
                <img src="/images/coding10.png" alt="Coding10" width="200">
                <div style="color: aqua;font-size: 14px">
                  我很冷，基本被冻傻了
                </div>
            </p>',
        ];
        
        return view('welcome', compact('post'));
    }
}
