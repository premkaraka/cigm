<?php

include_once 'db.php';

if (isset($_GET['f'])) {
    $f = $_GET['f'];
    switch ($f) {
        case 1:
            $catid = $_GET['catid'];
            echo(getSubCat($catid));
            break;
        case 2:
            $catid = $_GET['catid'];
            echo(listSubCat($catid));
            break;
    }
}

function getDailyBread() {
    global $con;
    $selcmnd = "select * from dailybread where did=1";
    $rs = mysqli_query($con, $selcmnd);
    $str = '';
    if ($row = mysqli_fetch_object($rs)) {
        $content = $row->content;
        $verse = $row->verse;
        $str = $content . "%%" . $verse;
    }
    return $str;
}

function getArticles() {
    global $con;
    $selcmnd = "select * from article where delbit=0 and isactive=1 order by postdate desc limit 5";
    $rs = mysqli_query($con, $selcmnd);
    $str = '';



    while ($row = mysqli_fetch_object($rs)) {
        $sNew = '';
//        if ($row->isNew == 1) {
//            $sNew = '<img style="display:inline!important;" width="30" height="14" src="images/new1.gif"/>';
//        }
        $str.='<li> <a href="viewarticle.php?aid=' . $row->articleid . '">' . $row->subject . '</a>' . $sNew . ' <hr/></li>';
    }

    $str.='';
    return $str;
}

function getNews() {
    global $con;

    $selcmnd = "select * from news where delbit=0 and isactive=1 order by postdate desc limit 5";
    $rs = mysqli_query($con, $selcmnd);

    $str = '';

    while ($row = mysqli_fetch_object($rs)) {
        $sNew = '';
//        if ($row->isNew == 1) {
//            $sNew = '<img style="display:inline!important;" width="33" height="16" src="images/new1.gif"/>';
//        }
        $str.='<li><a href="viewnews.php?nid=' . $row->newsid . '">' . $row->subject . '</a>' . $sNew . '<hr/></li>';
    }
    $str.='';
    return $str;
}

function Categories() {
    global $con;

    $selcmnd = "select * from category";
    $rs = mysqli_query($con, $selcmnd);
    return $rs;
}

function SubCategories($catid) {
    global $con;
    $selcmnd = "select * from subcategory where catid=" . $catid;
    $rs = mysqli_query($con, $selcmnd);
    return $rs;
}

function getCategory() {
    $rs = Categories();
    $str = '<option value="-1">Select</option>';
    while ($row = mysqli_fetch_object($rs)) {
        $str.='<option value="' . $row->catid . '">' . $row->catName . '</option>';
    }
    return $str;
}

function PopulateCategories() {
    $rs = Categories();

    $str = '';
    while ($row = mysqli_fetch_object($rs)) {
        $str.='<li><a href="#" class="skew25 filter" data-filter="' . strtolower($row->catName) . '">' . $row->catName . '</a></li>';
    }
    return $str;
}

function PopulateSubCategories() {
    global $con;
    $selcmnd = "SELECT g.imgid, s.subcatid, c.catid, s.subcatname, c.catName, g.imgname FROM galimages g JOIN subcategory s ON g.subcatid=s.subcatid JOIN category c ON g.catid=c.catid group by s.subcatid";
    $rs = mysqli_query($con, $selcmnd);
    $sSubCat = "";
    while ($row = mysqli_fetch_object($rs)) {
        $sSubCat .= '
        <div class="cell-3" data-filter="' . strtolower($row->catName) . '" style="display:block">
            <div class="portfolio-item">
                <div class="img-holder">
                    <div class="img-over">
                        <a  href="gallery.php?s=' . $row->subcatid . '&c=' . $row->catid . '" class="fx link"><b class="fa fa-link"></b></a>
                        <a href="admin/images/gallery/' . $row->imgname . '" class="fx zoom" title="' . $row->subcatname . '"><b class="fa fa-search-plus"></b></a>
                    </div>
                    <img style="width:263px; height:148px;" alt="" src="admin/images/gallery/' . $row->imgname . '">
                </div>
                <div class="name-holder">
                    <a href="#" class="project-name">' . $row->subcatname . '</a>
                </div>
            </div>
        </div>
        ';
    }
    return $sSubCat;
}

function PopulateGallery($c, $s) {
    global $con;
    $selcmnd = "SELECT g.imgid, s.subcatid, c.catid, s.subcatname, c.catName, g.imgname FROM galimages g JOIN subcategory s ON g.subcatid=s.subcatid JOIN category c ON g.catid=c.catid where g.catid=" . $c . " and g.subcatid=" . $s;
    $rs = mysqli_query($con, $selcmnd);
    $sgallery = "";
    while ($row = mysqli_fetch_object($rs)) {
        $sgallery .= '
        <div class="cell-3 fx animated fadeInDown">
            <a data-gal="prettyPhoto[pp_gal]" href="admin/images/gallery/' . $row->imgname . '" class="fx zoom" title="' . $row->subcatname . '">
                <img style="width:263px; height:148px;" alt="" src="admin/images/gallery/' . $row->imgname . '"></a>
        </div>
        
        ';
    }
    return $sgallery;
}

function getSubCat($catid) {
    global $con;
    $rs = SubCategories($catid);
    $str = '<option value="-1">Select</option>';
    while ($row = mysqli_fetch_object($rs)) {
        $str.='<option value="' . $row->subcatid . '">' . $row->subcatname . '</option>';
    }
    return $str;
}

function listSubCat($catid) {

    $rs = SubCategories($catid);
    $str = '';
    while ($row = mysqli_fetch_object($rs)) {
        $str.='<tr><td>' . $row->subcatname . '</td><td><a href="editgallery.php?subcatid=' . $row->subcatid . '&catid=' . $catid . '">Edit</a></td><td> <a href="javascript:del(' . $row->subcatid . ')"> Delete</a></td></tr>';
    }
    return $str;
}

?>