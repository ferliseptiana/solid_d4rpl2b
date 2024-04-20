<?php
// Define the interface ICPembayaran
interface ICPembayaran {
    public function memprosesPembayaran();
}

// Define the Debit class that implements the ICPembayaran interface
class Debit implements ICPembayaran {
    public function memprosesPembayaran() {
        echo "Memproses pembayaran debit...";
    }
}

// Define the Kredit class that implements the ICPembayaran interface
class Kredit implements ICPembayaran {
    public function memprosesPembayaran() {
        echo "Memproses pembayaran kredit...";
    }
}

// Define the Cash class that implements the ICPembayaran interface
class Cash implements ICPembayaran {
    public function memprosesPembayaran() {
        echo "Memproses pembayaran tunai...";
    }
}

// Example usage
$debitPayment = new Debit();
$creditPayment = new Kredit();
$cashPayment = new Cash();

// Create a customer payment instance
class PembayaranCustomer {
    public function menerimaPembayaran(ICPembayaran $paymentMethod) {
        $paymentMethod->memprosesPembayaran();
    }
}

$customerPayment = new PembayaranCustomer();
$customerPayment->menerimaPembayaran($debitPayment);
$customerPayment->menerimaPembayaran($creditPayment);
$customerPayment->menerimaPembayaran($cashPayment);
?>