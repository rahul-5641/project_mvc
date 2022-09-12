<?php


class Pages extends Controller
{
  public function index()
  {
    // print_r("sdfsdf");
    // exit;
    $data = [
      'title' => 'Employee Details',
    ];

    $this->view('pages/index', $data);
  }

  public function about()
  {
    $data = [
      'title' => 'About Us'
    ];

    $this->view('pages/about', $data);
  }

  public function main()
  {
    $this->view('pages/login');
  }

  public function guest()
  {
    $model = $this->model('Model');
    $posts = $model->alldetails();
    $data = [
      'posts' => $posts
    ];
    $this->view('pages/posts', $data);
  }

  public function logout()
  {
    session_unset();
    session_destroy();
    $this->view('pages/login');
  }

  public function login()
  {
    if (isset($_POST)) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      if (admin == $email && password == $password) {
        // session_start();
        $_SESSION['admin'] = 'email';
        $redirectUri = URLROOT . "index/loginCheck";
        header('Location:' . $redirectUri);
        exit;
      } else {
        $_SESSION['err'] = 'invalid username and password';
        $redirectUri = URLROOT . "index/loginCheck";
        header('Location:' . $redirectUri);
        exit;
      }
    }
  }
  public function pageView()
  {

    if (isset($_SESSION['admin'])) {
      $model = $this->model('Model');
      $posts = $model->allDetails();
      $data = [
        'posts' => $posts
      ];
      $this->view('pages/firstPage', $data);
    } else {
      $this->view('pages/login');
    }
  }

  public function loginCheck()
  {
    if (isset($_SESSION['admin'])) {
      $model = $this->model('Model');
      $posts = $model->allDetails();
      $data = [
        'posts' => $posts
      ];
      $this->view('pages/adminPage', $data);
    } else {

      $this->view('pages/login');
    }
  }

  public function add()
  {
    $this->view('pages/addDetails');
  }



  public function save()
  {
    $model = $this->model('Model');
    $postData = $_POST;
    $model->insert($postData);
    $this->view('pages/adminPage');
    $redirecturl = URLROOT . '/index/loginCheck';
    header('Location:' . $redirecturl);
  }

  public function display()
  {
    $model = $this->model('Model');
    $posts = $model->allDetails();
    $data = [
      'posts' => $posts
    ];
    $this->view('pages/display', $data);
  }

  public function clearEntry()
  {

    $this->view('pages/deleteEntry');
  }

  public function entryCleared()
  {
    $model = $this->model('Model');
    $model->deletingEntry();
  }

  public function search()
  {
    $data = $_POST;
    $model = $this->model('Model');
    $posts = $model->disp($data);
    $data = [
      'posts' => $posts
    ];
    //print_r($data);
    // exit;
    $this->view('pages/display', $data);
  }



  public function edit($id)
  {
    if (isset($_SESSION['admin'])) {
      $models = $this->model('Model');
      $models1 = $models->empDetail($id);
      $this->view('pages/editform', $models1);
    } else {
      $this->view('pages/login');
    }
  }

  public function updatedEntry()
  {

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $Phonenumber = $_POST['phonenumber'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $file = $_POST['file'];

    $data = [$id, $firstname, $lastname, $email, $Phonenumber, $street, $city, $state, $country, $file];
    $modal = $this->model('Model');
    $model1 = $modal->modelsave($data);
    $redirecturl = URLROOT . '/index/loginCheck';
    header('Location:' . $redirecturl);
  }
}
