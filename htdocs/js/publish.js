$(document).ready(function (){

    //日期选择控件
    $('.form_datetime').datetimepicker({
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        minView:2
        //showMeridian: 1
    });

    // 发布表单的验证
    function checkEmpty (obj) {
        if (obj.val() == '') {
            obj.parent().parent().addClass('has-error');
            obj.next().next().css('display','block');
            return false;
        } else{
            obj.parent().parent().removeClass('has-error');
            obj.next().next().css('display','none');
            return true;
        };
    }

    function Focus (obj) {
        obj.parent().parent().removeClass('has-error');
        obj.next().next().css('display','none');
    }

    $('#name').blur(function () {
        checkEmpty($('#name'));
    });
    $('#name').focus(function () {
        Focus($('#name'));
    });

    
    $('#nation').blur(function () {
        checkEmpty($('#nation'));
    });
    $('#nation').focus(function () {
        Focus($('#nation'));
    });

    $('#work').blur(function () {
        checkEmpty($('#work'));
    });
    $('#work').focus(function () {
        Focus($('#work'));
    });

    $('#height').blur(function () {
        checkEmpty($('#height'));
    });
    $('#height').focus(function () {
        Focus($('#height'));
    });

    $('#talent').blur(function () {
        checkEmpty($('#talent'));
    });
    $('#talent').focus(function () {
        Focus($('#talent'));
    });

    $('#concern1').blur(function () {
        checkEmpty($('#concern1'));
    });
    $('#concern1').focus(function () {
        Focus($('#concern1'));
    });

    $('#concern2').blur(function () {
        checkEmpty($('#concern2'));
    });
    $('#concern2').focus(function () {
        Focus($('#concern2'));
    });

    $('#place').blur(function () {
        checkEmpty($('#place'));
    });
    $('#place').focus(function () {
        Focus($('#place'));
    });

    $('#dtp_input1').blur(function () {
        checkEmpty($('#dtp_input1'));
    });
    $('#dtp_input1').focus(function () {
        Focus($('#dtp_input1'));
    });

    // textarea验证
    function checkTextarea(obj){
        var str = obj.val();
        var realLength = 0, len = str.length, charCode = -1;
        for (var i = 0; i < len; i++) {
            charCode = str.charCodeAt(i);
            if (charCode >= 0 && charCode <= 128) realLength += 1;
            else realLength += 2;
        }
        var num = Math.floor((1600 - realLength)/2);
        if (num>=0&&num<=800) {
            $("#num").text('您还可以输入'+num+'字');
            return true;
        } else{
            $("#num").text('已经超过'+(-num)+'字');
            return false;
        };
    }
    $("#textarea").bind("input propertychange",function () {
        checkTextarea($('#textarea'));
    });



    // 提交验证
    $('#publish').click(function () {
        if ((checkEmpty($('#name')) == true) &&(checkEmpty($('#nation')) == true) && (checkEmpty($('#work')) == true) && (checkEmpty($('#talent')) == true) && (checkEmpty($('#concern1')) == true) && (checkEmpty($('#concern2')) == true) && (checkEmpty($('#height')) == true) && (checkEmpty($('#place')) == true) && (checkEmpty($('#dtp_input1')) == true) && checkTextarea($('#textarea'))) {
                $('#publish').html('发布ing...');
                console.log('可以提交');
                $('#publishform').submit();
                return true;
            } else {
                console.log('请填写所有必填项之后提交');
                return false;
            }
        
    });
});