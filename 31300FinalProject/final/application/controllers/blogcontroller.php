<?php

class BlogController extends Controller{

	public $postObject;
	public $commentObject;
	public $userObject;

   	public function post($pID){
	$this->commentObject = new Comment();
        $this->postObject = new Post();
   		if (!empty($_POST['action']) && 'Add Comment' == $_POST['action']) {
   			$data = array(
					'uID'         => $_POST['uID'],
					'postID'      => $_POST['postID'],
					'commentText' => $_POST['commentText'],
                    'date'        => $_POST['date']
			);
   			$message = $this->commentObject->addComment($data);
   		}
   		$u = new Users();
   		// Delete comments
   		if ($u->isAdmin() && !empty($_POST['action']) && 'Delete' == $_POST['action']) {
   			$this->commentObject->deleteComment($_POST['commentID']);
   		}
   		$this->set('comments', $this->commentObject->getCommentsByPostID($pID));
		$post = $this->postObject->getPost($pID);
	  	$this->set('post',$post);
        $comments = $this->postObject->getComments($pID);
        $this->set('comments', $comments);
        $this->set('subtitle', 'View Comments');
        $this->set('commentposttitle', 'Login to post comments');
   	}

    public function comments($pID) {
        $this->postObject = new Post();
        $comments = $this->postObject->getComments($pID);
        $this->set('comments', $comments);
    }

	public function index(){
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Default Blog View');
		$this->set('posts',$posts);
	}

    public function categories($categoryID) {
        $this->categoryObject = new Category();
        $categories = $this->categoryObject->getCategory($categoryID);
        $this->set('title', 'This is a test');//$categories['name'].' Articles');
        $this->set('categories', $categories);
    }

}

?>
