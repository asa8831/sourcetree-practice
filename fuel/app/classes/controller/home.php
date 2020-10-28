<?php
class Controller_Home extends Controller
{
    public function action_index()
    {
       
        $view = View::forge('template/index'); //ベースとなるビューファイルの読込み

        $view->set('head',View::forge('template/head'));
        $view->set('content',View::forge('home/content'));
        $view->set('footer',View::forge('template/footer'));
        //テンプレートビューの中でさらに読み込んだビューの中にある変数へ値を渡したい場合はset_globalを使う。
        //テンプレートビューの中で使う変数へ値を渡すだけならsetでいい。

        
        // ベースとなるビューファイルに
        return $view;
    }
}