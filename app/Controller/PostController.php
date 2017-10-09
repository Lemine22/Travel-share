<?php

namespace Controller;


use \Exception;
use \W\Controller\Controller;
use \Manager\PostManager;
use \Manager\PhotoManager;
use \Model\Post;
use \Model\Photo;
use \Core\Utils;

class PostController extends Controller
{
	private $manager;

	public function __construct() {
		$this->manager = new PostManager();
	}

	public function _list() {

		$posts = $this->manager->findAll();

		$this->show('admin/post/list', array(
			'posts' => $posts,
		));

	}

	public function _photo() {

		$photos = $this->manager->findAll();

		$this->show('admin/photo/photo', array(
			'photos' => $photos,
		));

	}


	public function view($id) {

		$post = $this->manager->find($id);

		if (empty($post)) {
			$this->redirectToRoute('404');
		}

		$this->show('post/view', array(
			'post' => $post,
		));
	}

	public function add() {
	 	return $this->edit(null, 'post/add');
	}

	public function edit($post_id = null, $tpl = 'admin/post/edit')
	{
		$loggedUser = $this->getUser();

		if (empty($loggedUser)) {
			$this->redirectToRoute('user_login');
		}

		$errors = array();
		$result = false;

		if (!empty($post_id)) {
			$post = $this->manager->find($post_id);
		} else {
			$post = new Post();
		}

		if (!empty($_POST)) {

			foreach($post->getProperties() as $field => $_value) {
				try {
					$value = !empty($_POST[$field]) ? strip_tags($_POST[$field]) : '';
					$post->$field = $value;
				} catch (Exception $e) {
					$errors[$field] = $e->getMessage();
				}
			}

			if (empty($errors)) {
				$result = $this->manager->save($post);
				if (empty($result)) {
					$errors['db'] = 'Erreur interne, merci de réessayer ultérieurement';
				} else {

					$post_id = $result;

					$picture = '';
					if (!empty($_FILES)) {

						$upload_path = 'assets/images/bp/'.$post_id.'/';
						if (!is_dir($upload_path)) {
							mkdir($upload_path);
						}

						$picture_filename = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
						$picture_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

						$picture = Utils::cleanString($picture_filename).'.'.$picture_extension;
						$filetype = $_FILES['image']['type'];
						$temp_file = $_FILES['image']['tmp_name'];

						$upload_result = move_uploaded_file($temp_file, $upload_path.'/'.$picture);

						if (!$upload_result) {
							$errors['image'] = "L'envoi de votre image a échoué";
						} else {
							$photo = new Photo();
							$photo->post_id = $post_id;
							$photo->src = $picture;

							$photo_manager = new PhotoManager();
							$photo_manager->save($photo);
						}
					}
				}
			}
		}

		$this->show($tpl, array(
			'errors' => $errors,
			'result' => $result,
			'post' => $post,
		));
	}

	public function delete($id) {
	 	$result = $this->manager->delete($id);

	 	$this->redirectToRoute('admin_post_list');
	}
}








