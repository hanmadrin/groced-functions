include_once get_template_directory() . "/inc/producttitles.php";
    echo count($titles).'<br>';
    for($i=0;$i<count($titles);$i++)
    {
       $titles[$i]=$titles[$i].' ';
    }
    $titles = explode(' ',strtolower(implode($titles)));
    echo count($titles).'<br>';
    $titles=array_unique($titles);
    echo count($titles).'<br>';
    sort($titles);
    for($i=0;$i<count($titles);$i++)
    {
        $titlest=str_replace(array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'),array(),$titles[$i]);
        if(strlen($titlest)==0 && strlen($titles[$i])>=3)
        $titlesf[]=$titles[$i];
    }
    echo count($titlesf);
    echo json_encode($titlesf);
    die();
