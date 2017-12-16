<?php

class CommentController extends Controller {

    public $commentObject;

    public function add() {

        $this->commentObject = new Comment();
        $this->getCategories();
        $this->set('task', 'save');
    }

    public function save() {

        $this->commentObject = new Comment();
        $data = array('uID' => $_POST['uid'], 'commentText' => $_POST['textComment'], 'date' => date(), 'uID' => $_POST['uid']);
        $result = $this->commentObject->addComment($data);
        $this->set('message', $result);
    }

}
?>
