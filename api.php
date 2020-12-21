<?php
error_reporting(0);
include "config.php";

$auth = $_GET['auth']; //888
$perintah=$_GET['perintah'];

// tabel admin
$username=$_GET['username'];
$password=$_GET['password'];


//tabel barang
$id_barang= $_GET['id_barang'];
$nama_barang = $_GET['nama_barang'];
$stok = $_GET['stok'];
$harga_pokok = $_GET['harga_pokok'];
$harga_jual= $_GET['harga_jual'];
$ppn= $_GET['ppn'];
$diskon= $_GET['diskon'];

//tabel distributor
$id_distributor = $_GET['id_distributor'];
$nama_distributor = $_GET['nama_distributor'];
$alamat = $_GET['alamat'];
$telepon = $_GET['telepon'];


//tabel pasok
$id_pasok = $_GET['id_pasok'];
$id_distributor = $_GET['id_distributor'];
$id_barang = $_GET['id_barang'];
$jumlah = $_GET['jumlah']; 
$tanggal = $_GET['tanggal'];


//tabel penjualan
$id_penjualan= $_GET['id_penjualan'];
$id_barang= $_GET['id_barang'];
$id_kasir = $_GET['id_admin'];
$jumlah = $_GET['jumlah'];
$total = $_GET['total'];
$tanggal = $_GET['tanggal']; 

if($auth == "888"){

if (!empty($_GET) && $perintah=="insertadmin") {

    $sql = "INSERT INTO admin (username, password) VALUES ('". $username. "', '".$password."')";
    echo"<br>";
    echo $sql;

    if (mysqli_query($conn, $sql)) {
        echo "<br>";
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if(!empty($_GET) && $perintah=="updateadmin"){

    $sql = "update admin set username ='".$username."' where password='".$password."'";
    echo"<br>";
    echo $sql;

    if (mysqli_query($conn, $sql)) {
        echo "<br>";
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}

if(!empty($_GET) && $perintah=="deleteadmin"){

    $sql = "delete from admin where id_admin=".$id_admin;
    echo"<br>";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
        echo "<br>";
        echo "Record has been deleted";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (!empty($_GET) && $perintah=="selectadmin") {
    $return_arr = array();
	$sql = "SELECT * FROM admin";
	$result = $conn->query($sql);
    if ($result->num_rows > 0) {
  // output data of each row
        while($row = $result->fetch_assoc()) {
           
            $row_array['username'] = $row['username'];
            $row_array['password'] = $row['password'];
            array_push($return_arr,$row_array);
        }
        echo json_encode($return_arr);
    } else {
            echo "0 results";
    }
}

if(!empty($_GET) && $perintah=="insertbarang"){
        $sql = "INSERT INTO barang (id_barang, nama_barang, stok, harga_pokok,harga_jual,ppn,diskon) VALUES ('". $id_barang. "', '". $nama_barang."', '". $stok."', '". $harga_pokok."', '". $harga_jual."','". $ppn."','". $diskon."')";
        echo"<br>";
        echo $sql;
        if (mysqli_query($conn, $sql)) {
            echo "<br>";
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    
    if(!empty($_GET) && $perintah=="updatebarang"){
        $sql = "update barang set id_barang='".$id_barang."' where nama_barang='".$nama_barang."'";
        echo"<br>";
        echo $sql;
        if (mysqli_query($conn, $sql)) {
            echo "<br>";
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    
    if(!empty($_GET) && $perintah=="deletebarang"){
        $sql = "delete from barang where id_barang=".$id_barang;
        echo"<br>";
        echo $sql;
        if (mysqli_query($conn, $sql)) {
            echo "<br>";
            echo "Record has been deleted";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    
    if (!empty($_GET) && $perintah=="selectbarang") {
        $return_arr = array();
        $sql = "SELECT * FROM barang";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
      // output data of each row
            while($row = $result->fetch_assoc()) {
                $row_array['id_barang'] = $row['id_barang'];
                $row_array['nama_barang'] = $row['nama_barang'];
                $row_array['stok'] = $row['stok'];
                $row_array['harga_pokok'] = $row['harga_pokok'];
                $row_array['harga_jual'] = $row['harga_jual'];
                $row_array['ppn'] = $row['ppn'];
                $row_array['diskon'] = $row['diskon'];
                array_push($return_arr,$row_array);
            }
            echo json_encode($return_arr);
        } else {
                echo "0 results";
        }
    }

    if(!empty($_GET) && $perintah=="insertdistributor"){
        $sql = "INSERT INTO distributor (id_distributor, nama_distributor, alamat,telepon) VALUES ('". $id_distributor. "', '".$nama_distributor."', '".$alamat."', '".$telepon."')";
        echo"<br>";
        echo $sql;
        if (mysqli_query($conn, $sql)) {
            echo "<br>";
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    
    if(!empty($_GET) && $perintah=="updateditributor"){
        $sql = "update distributor set id_distributor='". $di_stributor. "' where nama_distributor='".$nama_distributor."'";
        echo"<br>";
        echo $sql;
        if (mysqli_query($conn, $sql)) {
            echo "<br>";
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    
    if(!empty($_GET) && $perintah=="deletedistributor"){
        $sql = "delete from distributor where di_stributor=".$di_stributor;
        echo"<br>";
        echo $sql;
        if (mysqli_query($conn, $sql)) {
            echo "<br>";
            echo "Record has been deleted";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    
    if (!empty($_GET) && $perintah=="selectdistributor") {
        $return_arr = array();
        $sql = "SELECT * FROM distributor";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
      // output data of each row
            while($row = $result->fetch_assoc()) {
                $row_array['id_distributor'] = $row['di_distributor'];
                $row_array['nama_distributor'] = $row['nama_distributor'];
                $row_array['alamat'] = $row['alamat'];
                $row_array['telepon'] = $row['telepon'];
                array_push($return_arr,$row_array);
            }
            echo json_encode($return_arr);
        } else {
                echo "0 results";
        }
    }

    if(!empty($_GET) && $perintah=="insertpasok"){
        $sql = "INSERT INTO pasok (id_pasok, id_distributor, id_barang, jumlah, tanggal) VALUES ('". $id_pasok. "', '".$distributor."', '".$id_barang."', '".$jumlah."', '".$tanggal."')";
        echo"<br>";
        echo $sql;
        if (mysqli_query($conn, $sql)) {
            echo "<br>";
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    
    if(!empty($_GET) && $perintah=="updatepasok"){
        $sql = "update pasok set password='". $id_pasok. "' where id_pasok='".$id_pasok."'";
        echo"<br>";
        echo $sql;
        if (mysqli_query($conn, $sql)) {
            echo "<br>";
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    
    if(!empty($_GET) && $perintah=="deletepasok"){
        $sql = "delete from pasok where tanggal=".$tanggal;
        echo"<br>";
        echo $sql;
        if (mysqli_query($conn, $sql)) {
            echo "<br>";
            echo "Record has been deleted";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    
    if (!empty($_GET) && $perintah=="selectpasok") {
        $return_arr = array();
        $sql = "SELECT * FROM pasok";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
      // output data of each row
            while($row = $result->fetch_assoc()) {
                $row_array['id_pasok'] = $row['id_pasok'];
                $row_array['id_distributor'] = $row['id_distributor'];
                $row_array['id_barang'] = $row['id_barang'];
                $row_array['jumlah'] = $row['jumlah'];
                $row_array['tanggal'] = $row['tanggal'];
                array_push($return_arr,$row_array);
            }
            echo json_encode($return_arr);
        } else {
                echo "0 results";
        }
    }

    if(!empty($_GET) && $perintah=="insertpenjualan"){
        $sql = "INSERT INTO penjualan (id_penjualan, id_barang, id_admin, jumlah, total,tanggal) VALUES ('". $id_penjualan. "', '".$id_barang."', '".$id_admin."', '".$jumlah."', '".$total."','".$tanggal."')";
        echo"<br>";
        echo $sql;
        if (mysqli_query($conn, $sql)) {
            echo "<br>";
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    
    if(!empty($_GET) && $perintah=="updatepenjualan"){
        $sql = "update penjualan set jumlah='". $jumlah. "' where total='".$total."'";
        echo"<br>";
        echo $sql;
        if (mysqli_query($conn, $sql)) {
            echo "<br>";
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
    }
    if(!empty($_GET) && $perintah=="deletepenjualan"){
        $sql = "delete from penjualan where total=".$total;
        echo"<br>";
        echo $sql;
        if (mysqli_query($conn, $sql)) {
            echo "<br>";
            echo "Record has been deleted";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
    }
    if (!empty($_GET) && $perintah=="selectpenjualan") {
        $return_arr = array();
        $sql = "SELECT * FROM penjualan";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $row_array['id_penjualan'] = $row['id_penjualan'];
                $row_array['id_barang'] = $row['id_barang'];
                $row_array['id_admin'] = $row['id_admin'];
                $row_array['jumlah'] = $row['jumlah'];
                $row_array['total'] = $row['total'];
                $row_array['tanggal'] = $row['tanggal'];
                array_push($return_arr,$row_array);
            }
            echo json_encode($return_arr);
        } 
        else {
                echo "0 results";
        }
    }
  
    if (!empty($_GET) && $perintah=="loginadmin") {
        $return_arr = array();
        $sql = "SELECT * FROM admin";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
      // output data of each row
            while($row = $result->fetch_assoc()) {
                //echo "<br>";
                //echo "id_admin: " . $row["id_admin"]. " - nama : " . $row["nama"]. "tlp" . $row["tlp"]. "status" . $row["telepon"]. "<br>";
                $row_array['username'] = $row['username'];
                $row_array['password'] = $row['password'];
                array_push($return_arr,$row_array);
            }
            echo json_encode($return_arr);
        } else {
                echo "0 results";
        }
    }
    
$conn->close();
} 

?>
