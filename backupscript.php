<?php
		include('db_backup_library.php');
    include('controller.php');
        $dbbackup=new db_backup;
        $dbbackup->backup();
        $dbbackup->save("backup/","newbackup");
        header('Location:home.php');
?>