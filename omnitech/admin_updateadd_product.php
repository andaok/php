<?php

/**
 *             @author terryyw
 *             @copyright 2010
 */

require_once('onmitech_fns.php');

//------------------����admin_home�����Ĳ���----------------------------//
//
//------------------����admin_home�Ĳ�����Ϊ��ʱ----------------------------------//
if (!empty($_GET['name']) || !empty($_GET['updateoraddsub'])) 
{

if (!empty($_GET['name'])) {
    $formarray = $_GET['name'];
    $updateoraddsub = $formarray['updateoraddsub'];
    $classname = $formarray[findproductsel][0];
    $productname = $formarray[findproductsel][1];
    if ($classname == "0" || $productname == "0") {
        echo "please select class and product";
        exit;
    }
}else {
    $updateoraddsub = $_GET['updateoraddsub'];
    $classname = $_GET['addproductform'];
}

//-----------------����$updateoraddsubֵ�ж�admin�������Ǹ���ť---------//     
//
switch ($updateoraddsub) {
    case "update product info":
    //-------------��ͬ�Ĳ�Ʒ���,���ò�ͬ�����.-----------------------//
    //
    switch ($classname) {
        case "Card":
        $update = "update";
        $updatepage = new updatecard($classname,$update,$productname);
        break;
        
        
    }
    break;
    
    case "add this class product":
    $add = "add";
    $addpage = new updatecard($classname,$add);
    break;
}

}else 
{
    //----------����admin_home�Ĳ���Ϊ��ʱ-------------------------------//
    $updateoraddproduct = $_POST['updateoraddproduct'];

    switch ($updateoraddproduct) {
        case "update product":
        //��ͬ�Ĳ�Ʒ��,ѡȡ���¶���
        switch ($_POST['classname']) {
            case "Card":
            //����"product" ���е�xtimage��Ϣ,���ݿ���Ƶ�������.
            $query = "update product set productimage = '".$_POST['xtimage']."' 
                      where classname ='".$_POST['classname']."' and productname = '".$_POST['name']."'";
            $result = do_query($query);
            if (!$result) {
                throw new Exception ('add productimage to table product fail');
                exit;
            }
            update_product_card($_POST['classname'],$_POST['xtimage'],$_POST['image'],$_POST['key1'],$_POST['key2'],
                             $_POST['key3'],$_POST['key4'],$_POST['key5'],$_POST['key6'],
                             $_POST['key7'],$_POST['key8'],$_POST['name'],$_POST['value2'],
                             $_POST['value3'],$_POST['value4'],$_POST['value5'],$_POST['value6'],
                             $_POST['value7'],$_POST['value8'],$_POST['showprice'],$_POST['price11'],
                             $_POST['price12'],$_POST['price13'],$_POST['price14'],$_POST['price15'],
                             $_POST['price16'],$_POST['price21'],$_POST['price22'],$_POST['price23'],
                             $_POST['price24'],$_POST['price25'],$_POST['price3'],$_POST['price4'],
                             $_POST['price5'],$_POST['price6']);
            break;
        }
        break;
        
        case "add product":
        //-----��֤product table���Ƿ��Ѿ����ڸò�Ʒ---------------------//
        $query = "select * from product where productname = '".$_POST['name']."' and classname = '".$_POST['classname']."'";
        $result = do_query($query);
        $num_rows = $result -> num_rows;
        if ($num_rows >= 1) {
        echo "This product already exists!";
        exit;
        }
        //-----����²�Ʒ��Ϣ��product table----//
        $classid = get_class_id($_POST['classname']);
        $query = "insert into product (classid,classname,productimage,productname) 
                              values ('".$classid."','".$_POST['classname']."','".$_POST['xtimage']."','".$_POST['name']."')";
        do_query($query);
        echo "add info to \"product\" table Operation successfully!<br />";
//--------------����²�Ʒ��Ϣ�����Ե�table-------------------------------//
//--------------��ͬ�Ĳ�Ʒ������ͬ�ı�------------------------------------//
        switch ($_POST['classname']) {
            case "Access Control System":
            break;
        
            case "Card":
            add_product_card($_POST['classname'],$_POST['xtimage'],$_POST['image'],$_POST['key1'],$_POST['key2'],
                             $_POST['key3'],$_POST['key4'],$_POST['key5'],$_POST['key6'],
                             $_POST['key7'],$_POST['key8'],$_POST['name'],$_POST['value2'],
                             $_POST['value3'],$_POST['value4'],$_POST['value5'],$_POST['value6'],
                             $_POST['value7'],$_POST['value8'],$_POST['showprice'],$_POST['price11'],
                             $_POST['price12'],$_POST['price13'],$_POST['price14'],$_POST['price15'],
                             $_POST['price16'],$_POST['price21'],$_POST['price22'],$_POST['price23'],
                             $_POST['price24'],$_POST['price25'],$_POST['price3'],$_POST['price4'],
                             $_POST['price5'],$_POST['price6']);
            break;
        
        case "RFID Label":
        break;
        
        case "RFID OEM Module":
        break;
        
        case "RFID Parts":
        break;
        
        case "RFID Reader":
        break;
        
        case "RFID Chip":
        break;
        
        case "RFID Development Kit":
        break;
        
        case "RFID Tag":
        break;
        }               
        break;
    }
    
}


//-------------���ú���------------------------------------------------------//
function do_query($query) {
    $dbconn = db_connect(); 
    $result = $dbconn -> query($query);
    if (!$result) {
        throw new Exception('admin_updateadd_product:do_query:conn to db error');
        exit;
    }
    return $result;
   
}   
//-------------get_class_id------------------------------------------------------//
function get_class_id($classname) {
    switch ($classname) {
        case "Access Control System":
        return 1;
        break;
        
        case "Card":
        return 2;
        break;
        
        case "RFID Label":
        return 3;
        break;
        
        case "RFID OEM Module":
        return 4;
        break;
        
        case "RFID Parts":
        return 5;
        break;
        
        case "RFID Reader":
        return 6;
        break;
        
        case "RFID Chip":
        return 7;
        break;
        
        case "RFID Development Kit":
        return 8;
        break;
        
        case "RFID Tag":
        return 9;
        break;
                
    }
        
}

?>