<?php
namespace App\Controllers;

use App\Models\BookModel;

class Book extends BaseController{
	public function index(){
		$session = \Config\Services::session();
		$data['session'] = $session;

		$model = new BookModel();

		$data['books_list'] = $model->getRecords();
		// echo "<pre>";
		// print_r($data);exit;
        return view('books/list', $data);
	} 

	public function create(){
		$session = \Config\Services::session();
		helper('form');

		$data = [];

		$data['session'] = $session;

		if($this->request->getMethod() == 'post'){
			$input = $this->validate([
				'names' => 'required|min_length[5]',
				'author' => 'required'
			]);

			if($input == true){
				//form validated successfully, so we can save values to database
                $model = new BookModel();

                $model->save([
                	'name' =>$this->request->getPost('names'),
                	'author' =>$this->request->getPost('author'),
                	'isbn' =>$this->request->getPost('isbn_no'),
                	'created_at' => date('Y-m-d H:i:s')
                ]);

                $session->setFlashdata('success','Winner Winner Chiken Dinner, Data inserted.');

                return redirect()->to('/books');
			}else{
				//form not validated
				$data['validation'] = $this->validator;
			}

		}

		return view('books/create',$data);
	} 

	public function edit($id){

		

		$session = \Config\Services::session();
		helper('form');

		$data = [];

		$data['session'] = $session;

		$model = new BookModel();

		$book = $model->getRow($id);

		$data['book'] = $book;

		if(empty($book)){
			$session->setFlashdata('error','Record not found');
            return redirect()->to('/books');
		}

		if($this->request->getMethod() == 'post'){
			$input = $this->validate([
				'names' => 'required|min_length[5]',
				'author' => 'required'
			]);

			if($input == true){
				//form validated successfully, so we can save values to database
                $model = new BookModel();

                $model->update($id, [
                	'name' =>$this->request->getPost('names'),
                	'author' =>$this->request->getPost('author'),
                	'isbn' =>$this->request->getPost('isbn_no'),
                	'created_at' => date('Y-m-d H:i:s')
                ]);

                $session->setFlashdata('success','Winner Winner Chiken Dinner, Data updated.');

                return redirect()->to('/books');
			}else{
				//form not validated
				$data['validation'] = $this->validator;
			}

		}

		return view('books/edit',$data);
	}

	public function delete($id){
		$session = \Config\Services::session();

		$model = new BookModel();

		$book = $model->getRow($id);

		if(empty($book)){
			$session->setFlashdata('error','Record not found');
            return redirect()->to('/books');
		}

		$model = new BookModel();

		$model->delete($id);

		$session->setFlashdata('success','Data deleted.');
        return redirect()->to('/books');
	}
} 

?>