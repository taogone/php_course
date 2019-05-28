<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    ini_set("display_errors", "1");
    $uploaddir = 'C:\Bitnami\wampstack-7.1.29-0\apache2\htdocs\php_course\upload\file\\';
    $uploadfile = $uploaddir.basename($_FILES['userfile']['name']);
    echo '<pre>';
    if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
        echo "파일이 유효하고 성공적으로 업로드 되었습니다.";
    } else {
        print "파일 업로드 공격 가능성이 있습니다.";
    }
    echo "자세한 디버깅 정보입니다.";
    print_r($_FILES);
    print "</pre>";
    ?>
    <img src="file/<?=$_FILES['userfile']['name']?>" />
</body>

</html>