<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Creating a Acadamic Timetable </title>
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../view/css/style1.css">
    <script type="text/javascript" src="../view/js/main.js"></script>
</head>
<body>
<h1>Creating an Acadamic Timetable</h1>





<div class="con">
    <div style="width:700px;">
        <div class="left">
            <table>
                <tr>
                    <td><div class="item">English</div></td>
                </tr>
                <tr>
                    <td><div class="item">Science</div></td>
                </tr>
                <tr>
                    <td><div class="item">Music</div></td>
                </tr>
                <tr>
                    <td><div class="item">History</div></td>
                </tr>
                <tr>
                    <td><div class="item">Computer</div></td>
                </tr>
                <tr>
                    <td><div class="item">Mathematics</div></td>
                </tr>
                <tr>
                    <td><div class="item">Arts</div></td>
                </tr>
                <tr>
                    <td><div class="item">Ethics</div></td>
                </tr>
            </table>
        </div>
        <div class="right">
            <table>
                <tr>
                    <td class="blank"></td>
                    <td class="title">Monday</td>
                    <td class="title">Tuesday</td>
                    <td class="title">Wednesday</td>
                    <td class="title">Thursday</td>
                    <td class="title">Friday</td>
                </tr>
                <tr>
                    <td class="time">08:00</td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                </tr>
                <tr>
                    <td class="time">09:00</td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                </tr>
                <tr>
                    <td class="time">10:00</td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                </tr>
                <tr>
                    <td class="time">11:00</td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                </tr>
                <tr>
                    <td class="time">12:00</td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                </tr>
                <tr>
                    <td class="time">13:00</td>
                    <td class="lunch" colspan="5">Lunch</td>
                </tr>
                <tr>
                    <td class="time">14:00</td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                </tr>
                <tr>
                    <td class="time">15:00</td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                </tr>
                <tr>
                    <td class="time">16:00</td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                    <td class="drop"></td>
                </tr>
            </table>
        </div>
    </div>
</div>




<script>
    $(function(){
        $('.left .item').draggable({
            revert:true,
            proxy:'clone'
        });
        $('.right td.drop').droppable({
            onDragEnter:function(){
                $(this).addClass('over');
            },
            onDragLeave:function(){
                $(this).removeClass('over');
            },
            onDrop:function(e,source){
                $(this).removeClass('over');
                if ($(source).hasClass('assigned')){
                    $(this).append(source);
                } else {
                    var c = $(source).clone().addClass('assigned');
                    $(this).empty().append(c);
                    c.draggable({
                        revert:true
                    });
                }
            }
        });
        $('.left').droppable({
            accept:'.assigned',
            onDragEnter:function(e,source){
                $(source).addClass('trash');
            },
            onDragLeave:function(e,source){
                $(source).removeClass('trash');
            },
            onDrop:function(e,source){
                $(source).remove();
            }
        });
    });
</script>
</body>
</html>