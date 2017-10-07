<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>好好吃饭订餐系统</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="./css.css">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
</head>
<body>

<!--好好吃饭 logo-->
<img src="/pics/haohaochifan-logo.png" alt="" class='haohao-logo top'>


<!--start of 09-10-2017 到09-16-2017订餐表-->
<?php
$day        = date( 'w' );
$week_start = date( 'm-d-Y', strtotime( '-' . $day . ' days' ) );
$week_end   = date( 'm-d-Y', strtotime( '+' . ( 6 - $day ) . ' days' ) );
?>
<h3><?php echo $week_start . ' 到' . $week_end . '订餐表' ?></h3>
<!--end of 09-10-2017 到09-16-2017订餐表-->

<?php
//php获取今天是星期几
function getWeek($unixTime = '')
{
    $unixTime  = is_numeric( $unixTime ) ? $unixTime : time();
    $weekarray = array( '日', '一', '二', '三', '四', '五', '六' );
    return '星期' . $weekarray[ date( 'w', $unixTime ) ];
}

?>

<h2>🗓今天是 <span class="label label-warning"><?php echo date( "Y-m-d" ) . getWeek(); ?></span></h2>

<div class="alert alert-success">通知: 10月9日 周一longweekend我们没有送货, 请各位同学周二继续捧场, 谢谢!🙌</div>

<!--
https://jinshuju.net/f/SvfTi6
https://jinshuju.net/f/FnAr3i
https://jinshuju.net/f/vSywjm
https://jinshuju.net/f/eWNquI
https://jinshuju.net/f/CKtg8Y
-->

<?php
$dayOfWeek = date( 'w' );
$monday    = '';
$tuesday   = 'https://jinshuju.net/f/MMfuwK';
$wednesday = 'https://jinshuju.net/f/YSu7bU';
$thursday  = 'https://jinshuju.net/f/nx9935';
$friday    = 'https://jinshuju.net/f/ZZ45E0';
//$saturday  = 'http://sv.mikecrm.com/HXywD9A';


//only for test
//$dayOfWeek = 6;

//let saturday = sunday
//show all meals for the next week
if ($dayOfWeek == 6) {
    $dayOfWeek = 0;
}


switch (true) {
    case ( $dayOfWeek <= 1 ):
        echo "<a href='" . $monday . "'><button type=\"button\" class=\"btn btn-primary btn-lg\">周一</button></a>";

    case ( $dayOfWeek <= 2 ):
        echo "<a href='" . $tuesday . "'><button type=\"button\" class=\"btn btn-primary btn-lg\">周二</button></a>";

    case ( $dayOfWeek <= 3 ):
        echo "<a href='" . $wednesday . "'><button type=\"button\" class=\"btn btn-success btn-lg\">周三</button></a>";

    case ( $dayOfWeek <= 4 ):
        echo "<a href='" . $thursday . "'><button type=\"button\" class=\"btn btn-success btn-lg\">周四</button></a>";

    case ( $dayOfWeek <= 5 ):
        echo "<a href='" . $friday . "'><button type=\"button\" class=\"btn btn-info btn-lg\">周五</button></a>";

//	case ( $dayOfWeek <= 6 ):
//		echo "<a href='" . $saturday . "'><button type=\"button\" class=\"btn btn-info btn-lg\">周六</button></a>";
//		break;
//	default:
//		echo "
//		<a href='" . $monday . "'><button type=\"button\" class=\"btn btn-info btn-lg\">下周一</button></a>
//		<a href='" . $tuesday . "'><button type=\"button\" class=\"btn btn-info btn-lg\">下周二</button></a>
//		<a href='" . $wednesday . "'><button type=\"button\" class=\"btn btn-info btn-lg\">下周三</button></a>
//		<a href='" . $thursday . "'><button type=\"button\" class=\"btn btn-info btn-lg\">下周四</button></a>
//		<a href='" . $friday . "'><button type=\"button\" class=\"btn btn-info btn-lg\">下周五</button></a>
//		<a href='" . $saturday . "'><button type=\"button\" class=\"btn btn-info btn-lg\">下周六</button></a>
//
//
//		";
//		break;
}


?>

<button data-toggle="collapse" data-target="#demo">联系客服</button>

<div id="demo" class="collapse">
    <h4>右下角点击Chat,在线聊天.</h4>
    <h4>客服微信: Fooshion_catering</h4>
    <h4>客服电话: <a href="tel:6043243663">604-324-3663</a> (早上9点半 - 下午5点半)</h4>
    <h4>邮件客服: <a href="mailto:it@fooshion.net">it@fooshion.net</a></h4>
    <h5> ( 客服不能代替您下单,只能回答疑问,谢谢. ) </h5>

</div>




<div class="well">


    <!-- start of Modal UBC自提点 -->
    <div class="modal fade" id="ubc-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-info">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1><i class="glyphicon glyphicon-thumbs-up"></i> UBC自取地址</h1>
                </div>
                <div class="modal-body">
                    <h4>UBC自提(11:50-12:15): 2136 West Mall 旁Loading zone (English Language Institute 对面)</h4>
                    <h4>UBC自提(12:20-12:45): Forestry 门口停车场 30分钟停车位</h4>
                    <h4>UBC自提(12:50-13:10): Bookstores旁 停车场</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- start of Modal UBC自提点 -->

    <!-- start of Modal Langara自提点 -->
    <div class="modal fade" id="lang-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-info">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1><i class="glyphicon glyphicon-thumbs-up"></i> Langara自取地址</h1>
                </div>
                <div class="modal-body">
                    <h4>Langara自提(12:00-12:30)： Langara 停车场 Building B 靠 Ontario St 面</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- start of Modal Langara自提点 -->

    <ul class="list-group">
        <li class="list-group-item">
            <h3>🎉UBC和Langara的小主们，感谢你们在小店试运行期间的给力支持，凡在UBC（3个<a class="btn btn-info" href="#ubc-info" data-toggle="modal">自提点</a>）和Langara（1个<a class="btn btn-info" href="#lang-info" data-toggle="modal">自提点</a>）自提点取货免运费，一单都送！💪💪</h3>
        </li>

        <li class="list-group-item">
            <h3>🙋其他学校的孩纸和家长们,请直接联系客服午餐<strong>免费送餐</strong>服务,让孩子吃上热乎的营养中餐不再困难!</h3>
        </li>

        <li class="list-group-item">
            <h3>📢截單時間：
            配送範圍內：週一至週五 11:00（建議儘量提前一天下單）
            <br>
            配送範圍外：週一至週五 10:30</h3>
        </li>

        <li class="list-group-item">
            <h3>👏1) 滿3盒可配送區域:
                溫哥華41街以南
                Richmond center 以北
                <br>
                2) 满5盒可配送區域:
                Downtown 寫字樓
                Metrotown 寫字樓
                <br>
                以上区域5盒以下运费5元，5盒以上免运费
            </h3>
        </li>



        <li class="list-group-item">
            <h3>🚗<span style="text-decoration: underline;">其他区域,如需配送,请联系食尚小二.客服电话: <a href="tel:6043243663">604-324-3663</a></span>
            </h3>
        </li>

        <li class="list-group-item">
            <h3>👨‍👨‍👧‍👧我们提供团体用餐定制服务,欢迎咨询客服.</h3>
        </li>
    </ul>

</div>

<!--Go to top-->
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
<!--Go to top-->


<footer>&copy; Copyright 2017 Fooshion</footer>

</body>

<!--my script-->
<script src=" ./js.js"></script>

<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
    window.$zopim || (function (d, s) {
        var z = $zopim = function (c) {
            z._.push(c)
        }, $ = z.s =
            d.createElement(s), e = d.getElementsByTagName(s)[0];
        z.set = function (o) {
            z.set._.push(o)
        };
        z._ = [];
        z.set._ = [];
        $.async = !0;
        $.setAttribute("charset", "utf-8");
        $.src = "https://v2.zopim.com/?57KlmOFeaK0VtODOKxjo9nQh4w1cXq1Z";
        z.t = +new Date;
        $.type = "text/javascript";
        e.parentNode.insertBefore($, e)
    })(document, "script");
</script>
<!--End of Zendesk Chat Script-->

</html>
