<?php
class PostService
{
    private $posts = [];
    public function _construct()
    {
        $this-> posts[] = $this -> createPost(
                'Продам слона',
                '+795434365331',
                'Продаётся пока ещё небольшой дрессированный африканский слон.'
        );
        $this -> posts[] = $this -> createPost(
                'Сдам 8-к квартиру около метро недорого', 
                '+75454537656',
                'Сдаётся квартира евроремонт, без хозяев, только серьбёзным людям.'
                
        );
    }
      private function createPost($title, $phoneNumber, $text)
      {
          $c = new Post;
          $c-> title = $title;
          $c-> phoneNumber = $phoneNumber;
          $c -> text = $text;
          return $c;
      }
      public function getAllPosts()
      {
          return $this -> posts;
      }
      public function deletePost(Post $post)
      {
          $key = array_serch($this->posts, $post, true);
          if ($key === null)
          {
              throw new \Exception("Post is not in list, cannot delete");
          }
          unset($this->posts[$key]);
      }
      public function addPost(Post $post)
      {
          if (null !== array_serch($this->posts,$post,true)) {
              throw new Exception("Post already added");
          }
          $this->posts[] = $post;
      }
}
