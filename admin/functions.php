<?php

$koneksi = mysqli_connect("localhost", "himsiuns_oprec", "Ristek-PTI2022", "himsiuns_oprec");

function aman($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

function data($data) {
    global $koneksi;

    $username = $_SESSION['username'];
    $query  = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    return $result;
}

function totalpeserta($total){
    global $koneksi;

    $table = "regis";
    $sql = "SELECT * FROM $table";
    $query = mysqli_query($koneksi,$sql);
    $data = array();
    while(($row = mysqli_fetch_array($query)) != null){
        $data[] = $row;
    }
    $count = count($data);   
    echo $count;                                   
}

function akademik($total){
    global $koneksi;

    $dinas = "Akademik";
    $sql = "SELECT * FROM regis WHERE pil1 LIKE '%$dinas%' OR pil2 LIKE '%$dinas%'" ;
    $query = mysqli_query($koneksi,$sql);
    $data = array();
    while(($row = mysqli_fetch_array($query)) != null){
        $data[] = $row;
    }
    $count = count($data);   
    echo $count;                                     
}

function bistra($total){
    global $koneksi;

    $dinas = "Bistra";
    $sql = "SELECT * FROM regis WHERE pil1 LIKE '%$dinas%' OR pil2 LIKE '%$dinas%'" ;
    $query = mysqli_query($koneksi,$sql);
    $data = array();
    while(($row = mysqli_fetch_array($query)) != null){
        $data[] = $row;
    }
    $count = count($data);   
    echo $count;                                   
    
}

function humas($total){
    global $koneksi;

    $dinas = "Humas";
    $sql = "SELECT * FROM regis WHERE pil1 LIKE '%$dinas%' OR pil2 LIKE '%$dinas%'" ;
    $query = mysqli_query($koneksi,$sql);
    $data = array();
    while(($row = mysqli_fetch_array($query)) != null){
        $data[] = $row;
    }
    $count = count($data);   
    echo $count;                                   
}

function kestari($total){
    global $koneksi;

    $dinas = "Kestari";
    $sql = "SELECT * FROM regis WHERE pil1 LIKE '%$dinas%' OR pil2 LIKE '%$dinas%'" ;
    $query = mysqli_query($koneksi,$sql);
    $data = array();
    while(($row = mysqli_fetch_array($query)) != null){
        $data[] = $row;
    }
    $count = count($data);   
    echo $count;                                   
}

function mulmed($total){
    global $koneksi;

    $dinas = "Mulmed";
    $sql = "SELECT * FROM regis WHERE pil1 LIKE '%$dinas%' OR pil2 LIKE '%$dinas%' " ;
    $query = mysqli_query($koneksi,$sql);
    $data = array();
    while(($row = mysqli_fetch_array($query)) != null){
        $data[] = $row;
    }
    $count = count($data);   
    echo $count;                                   
}

function pti($total){
    global $koneksi;

    $dinas = "PTI";
    $sql = "SELECT * FROM regis WHERE pil1 LIKE '%$dinas%' OR pil2 LIKE '%$dinas%' " ;
    $query = mysqli_query($koneksi,$sql);
    $data = array();
    while(($row = mysqli_fetch_array($query)) != null){
        $data[] = $row;
    }
    $count = count($data);   
    echo $count;                                   
}

function psdm($total){
    global $koneksi;

    $dinas = "PSDM";
    $sql = "SELECT * FROM regis WHERE pil1 LIKE '%$dinas%' OR pil2 LIKE '%$dinas%' " ;
    $query = mysqli_query($koneksi,$sql);
    $data = array();
    while(($row = mysqli_fetch_array($query)) != null){
        $data[] = $row;
    }
    $count = count($data);   
    echo $count;                                   
}

function seni($total){
    global $koneksi;

    $dinas = "Seni";
    $sql = "SELECT * FROM regis WHERE pil1 LIKE '%$dinas%' OR pil2 LIKE '%$dinas%' " ;
    $query = mysqli_query($koneksi,$sql);
    $data = array();
    while(($row = mysqli_fetch_array($query)) != null){
        $data[] = $row;
    }
    $count = count($data);   
    echo $count;                                   
}

function olahraga($total){
    global $koneksi;

    $dinas = "Olahraga";
    $sql = "SELECT * FROM regis WHERE pil1 LIKE '%$dinas%' OR pil2 LIKE '%$dinas%' " ;
    $query = mysqli_query($koneksi,$sql);
    $data = array();
    while(($row = mysqli_fetch_array($query)) != null){
        $data[] = $row;
    }
    $count = count($data);   
    echo $count;                                   
}

 function kastrad($total){
    global $koneksi;

    $dinas = "Kastrad";
    $sql = "SELECT * FROM regis WHERE pil1 LIKE '%$dinas%' OR pil2 LIKE '%$dinas%' " ;
    $query = mysqli_query($koneksi,$sql);
    $data = array();
    while(($row = mysqli_fetch_array($query)) != null){
        $data[] = $row;
    }
    $count = count($data);   
    echo $count;                                   
}

?>

