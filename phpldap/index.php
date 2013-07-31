<?php
/**
 * 炎黄娱动应用服务
 * 应用服务首页，index.php
 * Write by : TerryYW
 * Date : 2010.7.5
 */
 require_once('function.php');
 session_start();
 if (isset($_POST['userid']) && isset($_POST['password'])) 
 {
    if ($_POST['userid'] == "" || $_POST['password'] == "") 
    {
        info("请将信息填写完整!");
    } else {
        $pwd=$_POST['password'];
        $type=$_POST['apptype'];
        $connldap=ldap_connect("192.168.1.136");
        if ($connldap) 
        {
            $bindldap=ldap_bind($connldap);
            
            //-------samba start-------
            if ("$type" == "samba") 
            {
               $sambaset=ldap_search($connldap,"ou=samba,dc=server,dc=yh","uid=".$_POST['userid']."",array("uid","sambantpassword"));
               $sambaentries=ldap_get_entries($connldap,$sambaset); 
               if ($sambaentries['count'] == 1) 
               {
                   $sambantpwd=$sambaentries[0]["sambantpassword"][0];
                   $inputntpwd=trim(shell_exec("/usr/local/bin/mkntpwd -N $pwd"));
                   if ("$sambantpwd" == "$inputntpwd") 
                   {
                       info("验证通过，进入.......");
                       $_SESSION['valid_user'] = $_POST['userid'];
                       header("location: https://".$_SERVER['HTTP_HOST']."/main.php");
                   } else {
                       info("输入的密码不正确！");
                   }
               } else {
                 info("无此Samba用户!");
               }
               
            }
            //--------samba end---------   
            
            //--------svn start---------
            if ("$type" == "svn") 
            {
                $staffset=ldap_search($connldap,"ou=svn,dc=server,dc=yh","cn=".$_POST['userid']."",array("cn","userpassword"));
                $staffentries=ldap_get_entries($connldap,$staffset); 
                if ($staffentries['count'] == 1) 
                {
                    $md5pwd=trim(shell_exec("slappasswd -s $pwd -h {MD5}"));
                    $staffpwd=$staffentries[0]["userpassword"][0];
                    if ("$staffpwd" == "$md5pwd") 
                    {
                        info("验证通过，进入.......");
                        $_SESSION['valid_user'] = $_POST['userid'];
                        header("location: https://".$_SERVER['HTTP_HOST']."/main.php");
                    } else {
                        info("输入的密码不正确！");
                    }
                }  else {
                    info("无此Svn,Email,知识共享平台用户!");
                }
                 
            }
            //--------svn end-----------
        }
    }
 }
?>
<html>
    <head>
    <title>炎黄娱动</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
    table {
    border: 1px;
    background-color: #ffdead;
    border-color: black;
    border-style: dashed;
    margin-top: 0px;
    }
    tr {
    margin-bottom: 0px;
    margin-top: 0px;
    }
    </style>
    </head>
    <body>
    <?php
    if (isset($_SESSION['valid_user']))
    {
        header("location: https://".$_SERVER['HTTP_HOST']."/main.php");
    } else {
        ?>
        <h5 align="center">注：Samba是单独账号，Svn,Email,知识共享平台是同一账号！</h5>
        <form method="post" action="index.php">
           <table align="center">
              <tr>
                <td align="right">Userid:</td>
                <td><input name="userid" type="text" size="20" /></td>
              </tr>
              <tr>
                <td>Password:</td>
                <td><input name="password" type="password" size="20"  /></td>
              </tr>
              <tr>
              <td colspan="2" align="center">
              <input type="radio" name="apptype" value="samba" checked="checked" />Samba
              <input type="radio" name="apptype" value="svn"  />Svn,Email,ShareBlog
              </td>
              </tr>
              <tr>
                <td></td>
                <td><input type="submit" name="login" value="Login"/></td>
              </tr>
           </table>
        </form>
        <?php
    }
    ?>
    </body>
</html>
