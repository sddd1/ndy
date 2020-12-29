<?php
$hide=$_REQUEST["hide"];
$conn=mysqli_connect("127.0.0.1","root","","h52005",3306);
mysqli_query($conn,"SET NAMES utf8");
if($hide==0){
    // 新闻
    $sql="SELECT * FROM new order by id desc limit 18";
    $rs=mysqli_query($conn,$sql);
    $arr=[];
    while(($row=mysqli_fetch_assoc($rs))!=null){
        array_push($arr,$row);
    }
    echo $_GET["callback"]."(".JSON_encode($arr).")";
}else if($hide==1){
    $sql="SELECT * FROM new2 order by id desc limit 18";
    $rs=mysqli_query($conn,$sql);
    $arr=[];
    while(($row=mysqli_fetch_assoc($rs))!=null){
        array_push($arr,$row);
    }
    echo $_GET["callback"]."(".JSON_encode($arr).")";
}else if($hide==2){
    $sql="SELECT * FROM new3 order by id desc limit 5";
    $rs=mysqli_query($conn,$sql);
    $arr=[];
    while(($row=mysqli_fetch_assoc($rs))!=null){
        array_push($arr,$row);
    }
    echo $_GET["callback"]."(".JSON_encode($arr).")";
}else if($hide==3){
    $sql="SELECT * FROM new4 order by id desc limit 18";
    $rs=mysqli_query($conn,$sql);
    $arr=[];
    while(($row=mysqli_fetch_assoc($rs))!=null){
        array_push($arr,$row);
    }
    echo $_GET["callback"]."(".JSON_encode($arr).")";
}else if($hide==4){
    $sql="SELECT * FROM newImg";
    $rs=mysqli_query($conn,$sql);
    $arr=[];
    while(($row=mysqli_fetch_assoc($rs))!=null){
        array_push($arr,$row);
    }
    echo $_GET["callback"]."(".JSON_encode($arr).")";
}else if($hide==5){
    $sql="SELECT * FROM shopping";
    $rs=mysqli_query($conn,$sql);
    $arr=[];
    while(($row=mysqli_fetch_assoc($rs))!=null){
        array_push($arr,$row);
    }
    echo $_GET["callback"]."(".JSON_encode($arr).")";
}else if($hide==6){
    $sql="SELECT * FROM shopping2";
    $rs=mysqli_query($conn,$sql);
    $arr=[];
    while(($row=mysqli_fetch_assoc($rs))!=null){
        array_push($arr,$row);
    }
    echo $_GET["callback"]."(".JSON_encode($arr).")";
}else if($hide==7){
    $sql="SELECT * FROM shopping3";
    $rs=mysqli_query($conn,$sql);
    $arr=[];
    while(($row=mysqli_fetch_assoc($rs))!=null){
        array_push($arr,$row);
    }
    echo $_GET["callback"]."(".JSON_encode($arr).")";
}else if($hide==8){
    $id=$_GET["id"];
    $sql="SELECT * FROM shopping3 WHERE id={$id}";
    $rs=mysqli_query($conn,$sql);
    $arr=[];
    while(($row=mysqli_fetch_assoc($rs))!=null){
        array_push($arr,$row);
    }
    echo $_GET["callback"]."(".JSON_encode($arr).")";
}
?>