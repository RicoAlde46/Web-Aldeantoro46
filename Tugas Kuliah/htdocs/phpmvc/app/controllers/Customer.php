
<?php
class Customer extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Customer';
        $data['csr'] = $this->model('Customer_model')->getAllCustomer();
        $this->view('templates/header', $data);
        $this->view('customer/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Customer';
        $data['csr'] = $this->model('Customer_model')->getCustomerById($id);
        $this->view('templates/header', $data);
        $this->view('customer/detail', $data);
        $this->view('templates/footer');
    }
}
