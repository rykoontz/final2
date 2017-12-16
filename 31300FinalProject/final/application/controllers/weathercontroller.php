<?php

class WeatherController extends Controller{
	public function index() {

		$this->set(result,false);
	}

	public function getresults() {

		$xml = simplexml_load_file("http://api.worldweatheronline.com/premium/v1/weather.ashx?key=059a19202d5a4d70a8a235214171211&q=".$_POST['zip']."&format=xml&num_of_days=2");
		$this->set(result,true);
		$this->set(weather,$xml);
	}

}

?>
