<?php

/**
 * 炎黄娱动应用服务
 * 应用服务首页，main.php
 * Write by : TerryYW
 * Date : 2010.7.5
 */
 
require_once('function.php');
session_start();

if (isset($_SESSION['valid_user'])) 
{
    info($_SESSION['valid_user']);
    if (isset($_POST['oldpwd']) && isset($_POST['newpwd1']) && isset($_POST['newpwd2'])) 
    {
        if ($_POST['oldpwd'] == "" || $_POST['newpwd1'] == "" || $_POST['newpwd2'] == "") 
        {
            info("请将信息填写完整!");
        } else {
            $connldap=ldap_connect("192.168.1.136");
            $bindldap=ldap_bind($connldap,"cn=root,dc=server,dc=yh","yhgame668");
                    
            //Samba module
            if ($_POST['apptype'] == "samba") 
            {
                $sambaset=ldap_search($connldap,"ou=samba,dc=server,dc=yh","uid=".$_SESSION['valid_user']."",array("uid","sambantpassword"));
                $sambaentries=ldap_get_entries($connldap,$sambaset); 
                if ($sambaentries['count'] == 1) 
                {
                    $oldclearpwd=trim($_POST['oldpwd']);
                    $oldntpwd=trim(shell_exec("/usr/local/bin/mkntpwd -N $oldclearpwd"));
                    $oldpwd=$sambaentries[0]["sambantpassword"][0];
                    
                    if ($oldntpwd == $oldpwd && trim($_POST['newpwd1']) == trim($_POST['newpwd2'])) 
                    {
                        $newclearpwd=trim($_POST['newpwd1']);
                        $newntpwd=trim(shell_exec("/usr/local/bin/mkntpwd -N $newclearpwd"));
                        $attrs=array("sambantpassword" => $newntpwd);
                        $dn="uid=".$_SESSION['valid_user'].",ou=samba,dc=server,dc=yh";
                        ldap_modify($connldap,$dn,$attrs);
                        info("修改Samba密码成功!");
                    } else {
                        if ($oldntpwd != $oldpwd) 
                        {
                            info("原密码不正确，请重新输入！");
                        }
                        if (trim($_POST['newpwd1']) != trim($_POST['newpwd2'])) 
                        {
                            info("新密码，两次输入不一致！");
                        }
                    }
                } else {
                    info("无此Samba用户!");
                }
            }
            
            //Svn module
            if ($_POST['apptype'] == "svn") 
            {
                $svnset=ldap_search($connldap,"ou=svn,dc=server,dc=yh","cn=".$_SESSION['valid_user']."",array("cn","userpassword"));
                $svnentries=ldap_get_entries($connldap,$svnset); 
                if ($svnentries['count'] == 1) 
                {
                    $oldinputpwd=trim($_POST['oldpwd']);
                    $oldmd5pwd=trim(shell_exec("slappasswd -s $oldinputpwd -h {MD5}"));
                    $oldpwd=$svnentries[0]["userpassword"][0];
                    
                    if ($oldmd5pwd == $oldpwd && trim($_POST['newpwd1']) == trim($_POST['newpwd2'])) 
                    {
                        $inputpwd=trim($_POST['newpwd1']);
                        $newmd5pwd=trim(shell_exec("slappasswd -s $inputpwd -h {MD5}"));
                        $attrs=array("userpassword" => $newmd5pwd);
                        $dn="cn=".$_SESSION['valid_user'].",ou=svn,dc=server,dc=yh";
                        ldap_modify($connldap,$dn,$attrs);
                        info("修改Svn,Email,知识共享平台密码成功!");
                    } else {
                        if ($oldntpwd != $oldpwd) 
                        {
                            info("原密码不正确，请重新输入！");
                        }
                        if (trim($_POST['newpwd1']) != trim($_POST['newpwd2'])) 
                        {
                            info("新密码，两次输入不一致！");
                        }
                    }
                    
                } else {
                    info("无此SVN,Email,知识共享平台用户!");
                }
            }  
        }
    }
} else {
    header("location: https://".$_SERVER['HTTP_HOST']."/index.php");
}

//前台html代码
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
   <h5 align="center"></h5>
    <form method="post" action="main.php">
      <table align="center">
       <tr align="center">
        <td colspan="2">
         <input type="radio" name="apptype" value="samba" checked="checked"  />Samba
         <input type="radio" name="apptype" value="svn"  />Svn,Email,ShareBlog
        </td>
       </tr>
       <tr>
        <td align="right">Old Password:</td>
        <td><input name="oldpwd" type="password" size="18" /></td>
       </tr>
       <tr>
        <td align="right">New Password:</td>
        <td><input name="newpwd1" type="password" size="18" /></td>
       </tr>
       <tr>
        <td align="center">New Password:</td>
        <td><input name="newpwd2" type="password" size="18" /></td>
       </tr>
       <tr>
        <td></td>
        <td><input type="submit" name="alter" value="Alter"/></td>
       </tr>
      </table>
    </form>
   </body>
</html>
<?php

?>
