<?php
include "/conf/dbconfig.php";


$page_size=10;

$page_list_size = 10;


$no = $_GET[no];
if (!$no || $no <0) $no=0; 

$query = "SELECT * FROM $board ORDER BY thread DESC LIMIT $no,$page_size";
$result = mysql_query($query, $conn);


$result_count=mysql_query("SELECT count(*) FROM $board",$conn);
$result_row=mysql_fetch_row($result_count);
$total_row = $result_row[0];


if ($total_row <= 0) $total_row = 0;


$total_page = floor(($total_row - 1) / $page_size); 

$current_page = floor($no/$page_size);

?>
<html>
<head>
<title></title>
<style>

</style>
</head>
<body topmargin=0 leftmargin=0 text=#464646>
<center>
<BR>

<table width=580 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777>

<tr height=20 bgcolor=#999999>
    <td width=30 align=center>
        <font color=white>번호</font>
    </td>
    <td width=370 align=center>
        <font color=white>제 목</font>
    </td>
    <td width=50 align=center>
        <font color=white>글쓴이</font>
    </td>
    <td width=60 align=center>
        <font color=white>날 짜</font>
    </td>
    <td width=40 align=center>
        <font color=white>조회수</font>
    </td>
</tr>

<?php
    while($row=mysql_fetch_array($result))
    {
?>

<tr>

    <td height=20 bgcolor=white align=center>
        <a href="read.php?id=<?=$row[id]?>&no=<?=$no?>">
        <?=$row[id]?></a>
    </td>

    <td height=20 bgcolor=white>&nbsp;
        <?php
        if ($row[depth] >0)
		echo "<img height=1 width=" . $row[depth]*7 . ">└";
        ?>
        <a href="read.php?id=<?=$row[id]?>&no=<?=$no?>">
        <?=strip_tags($row[title]);?></a>
    </td>

    <td align=center height=20 bgcolor=white>
        <font color=black>
        <a href="mailto:<?=$row[email]?>"><?=$row[name]?></a>
        </font>
    </td>

    <td align=center height=20 bgcolor=white>
        <font color=black><?=date("Y-m-d",$row[wdate]) ?></font>
    </td>

    <td align=center height=20 bgcolor=white>
        <font color=black><?=$row[view]?></font>
    </td>

</tr>

<?php
    }

mysql_close($conn);
?>
</table>

<table border=0>
<tr>
    <td width=600 height=20 align=center rowspan=4>
    <font color=gray>
    &nbsp;
<?php

$start_page = (int)($current_page / $page_list_size) 
    * $page_list_size;


$end_page = $start_page + $page_list_size - 1;
if ($total_page <$end_page) $end_page = $total_page;

if ($start_page >= $page_list_size) {

    $prev_list = ($start_page - 1)*$page_size;
    echo "<a href=$PHP_SELF?no=$prev_list>◀</a> ";
}

for ($i=$start_page;$i <= $end_page;$i++) {
    $page=$page_size*$i; 
    $page_num = $i+1;
    
    if ($no!=$page){ 
        echo "<a href=$PHP_SELF?no=$page>";
    }

    echo " $page_num "; 

    if ($no!=$page){
        echo "</a>";
    }
}

if($total_page >$end_page)
{

    $next_list = ($end_page + 1)* $page_size;
    echo "<a href=$PHP_SELF?no=$next_list>▶</a><p>";
}
?>
</font>
</td>
</tr>
</table>
<a href=write.php>글쓰기</a>
</center>
</body>
</html>
