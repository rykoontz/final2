<?php

class AjaxController extends Controller{

	protected $postObject;
    protected $userObject;
    protected $categoryObject;
    protected $commentObject;


	public function index(){
		$this->set("response","Invalid Request");
	}

    public function get_post_content() {

        $this->postObject = new Post();
        $post = $this->postObject->getPost($_GET['pID']);
        $this->set('response',$post['content']);


    }

    public function get_comment_content() {
        $this->commentObject = new Comment();
        $comment = $this->commentObject->getComments($_GET['pID']);
        $this->set('response', $comment['content']);
    }

    public function getresults() {


        $xml = simplexml_load_file("http://api.worldweatheronline.com/premium/v1/weather.ashx?key=059a19202d5a4d70a8a235214171211&q=".$_POST['zip']."&format=xml&num_of_days=2");
        $this->set(result,true);
        $this->set(weather,$xml);

    }

}

?>
