<?php

use \Model\Post;
use Fuel\Core\DB;

class Presenter_example extends Presenter
{
	/**
	 * @return void
	 */
	public function dog_example()
	{
		$this->name = $this->request()
			->param('name', '臭比');
		$this->post = Post::get_all();
	}
}
