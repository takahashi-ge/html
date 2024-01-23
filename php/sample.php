<?php

// クラス
class Post{
  // プロパティ
  public $text;
  public $likes;

  // メソッド
  public function show(){
    printf('%s (%d)<br>', $this -> text, $this -> likes);
  }
}

$posts = [];
// $posts[0] = ['text' => 'Hello', 'likes' => 0];
// インスタンス
$posts[0] = new Post();
$posts[0]->text = 'Hello';
$posts[0]->likes = 0;
// $posts[1] = ['text' => 'Hi!', 'likes' => 0];
// インスタンス
$posts[1] = new Post();
$posts[1]->text = 'Hi!';
$posts[1]->likes = 0;

// print_r($posts);

// function show($post) {
//   printf('%s (%d)<br/>', $post['text'], $post['likes']);
// }

// show($posts[0]);
// show($posts[1]);
$posts[0]->show();
$posts[1]->show();

?>