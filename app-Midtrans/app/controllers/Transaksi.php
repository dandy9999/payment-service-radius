<?php


require_once dirname(__FILE__) . '/../../vendor/midtrans/midtrans-php/Midtrans.php';

class Transaksi extends Controller
{
    public function index()
    {
        $data['judul'] = 'Transaksi';
        $this->view('templates/header', $data);
        $this->view('transaksi/index', $data);
        $this->view('templates/footer');
    }
    public function checkout(){
        \Midtrans\Config::$serverKey = 'Mid-server-Zr6P7YUI5EUKQ_8efmT00748';
        \Midtrans\Config::$clientKey = 'Mid-client-J8gqh2R1O8-neSTG';
        \Midtrans\Config::$isProduction = true;
        \Midtrans\Config::$isSanitized = \Midtrans\Config::$is3ds = true;   
        $transaction_details = array(
            'order_id' => rand(100000,1000000),
            'gross_amount' => 2500,
        );
        $item_details = array (
            array(
                'id' => 'membership-wifi-1d',
                'price' => 2500,
                'quantity' => 1,
                'name' => "Hotspot Membership 1 Hari Dandot IT Solution"
            ),
        );
        if ($_POST['packet'] == '3d'){
            $item_details = array (
                array(
                    'id' => 'membership-wifi-3d',
                    'price' => 5000,
                    'quantity' => 1,
                    'name' => "Hotspot Membership 3 Hari Dandot IT Solution"
                ),
            );
            $transaction_details['gross_amount'] = 5000;
        }
        if ($_POST['packet'] == '7d'){
            $item_details = array (
                array(
                    'id' => 'membership-wifi-7d',
                    'price' => 10000,
                    'quantity' => 1,
                    'name' => "Hotspot Membership 7 Hari Dandot IT Solution"
                ),
            );
            $transaction_details['gross_amount'] = 10000;
        }
        if ($_POST['packet'] == '30d'){
            $item_details = array (
                array(
                    'id' => 'membership-wifi-30d',
                    'price' => 25000,
                    'quantity' => 1,
                    'name' => "Hotspot Membership 30 Hari Dandot IT Solution"
                ),
            );
            $transaction_details['gross_amount'] = 25000;
        }
        
        $customer_details = array(
            'phone'         => "081122334455"
        );
        $transaction = array(
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            'item_details' => $item_details,
        );

        $snap_token = '';
        try {
            $snap_token = \Midtrans\Snap::getSnapToken($transaction);
        }
        catch (\Exception $e) {
            echo $e->getMessage();
        }
        $data['token'] = $snap_token;
        $data['judul'] = 'Checkout';
        $data['paket'] = $item_details[0]['name'];
        $data['harga'] = $item_details[0]['price'];
        $data['id'] = $_POST['packet'];
        $this->view('templates/header', $data);
        $this->view('transaksi/checkout', $data);
        $this->view('templates/footer');
    }

    public function success()
    {
        $data['judul'] = 'Checkout Berhasil';
        $data['username'] = rand(1000,10000);
        $data['password'] = rand(1000,10000);
        if (isset($_POST['transaction_status']) && $_POST['transaction_status'] == 'settlement'){
            $data['id'] = $_POST['idpaket'];
            $this->view('templates/header', $data);
            $this->view('transaksi/success', $data);
            $this->view('templates/footer');
            $this->model('Transaksi_model')->tambahDataAccount($data);
        }
        else if (isset($_POST['promocode']))
        {
            if ($_POST['promocode'] == 'developer')
            {
                $data['id'] = $_POST['idpaket'];
                Flasher::setFlash('berhasil', 'digunakan!', 'success');
                $this->view('templates/header', $data);
                $this->view('transaksi/success', $data);
                $this->view('templates/footer');
                $this->model('Transaksi_model')->tambahDataAccount($data);
            }
            else 
            {
                Flasher::setFlash('salah', '!', 'danger');
                header('Location: ' . BASEURL . '/transaksi');
                exit;
            }
            
        }
        else
        {
            header('Location: ' . BASEURL . '/transaksi');
            exit;
        }

    }
}